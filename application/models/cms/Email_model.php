<?php

class Email_model extends Admin_core_model
{

  function __construct()
  {
    parent::__construct();


    $this->upload_dir = 'uploads/pop/';
    $this->load->library('email');
    $config_mail['protocol']= getenv('MAIL_PROTOCOL');
    $config_mail['smtp_host']= getenv('SMTP_HOST');
    $config_mail['smtp_port']= getenv('SMTP_PORT');
    $config_mail['smtp_timeout']='30';
    $config_mail['smtp_user']= getenv('SMTP_EMAIL');
    $config_mail['smtp_pass']= getenv('SMTP_PASS');
    $config_mail['charset']='utf-8';
    $config_mail['newline']="\r\n";
    $config_mail['wordwrap'] = TRUE;
    $config_mail['mailtype'] = 'html';
    $this->email->initialize($config_mail);

    // $this->load->model('cms/Home_model');
    $this->load->model('cms/Order_model');
    $this->load->model('cms/Images_model');
    $this->load->model('cms/Rates_model');
  }

  public function sendOrderDetails($order_last_id)
  {
    $order = $this->Order_model->get($order_last_id);
    $attach = $this->Images_model->getImages($order->order_id);
    $i = 1; foreach ($attach as $key => $value):
    $formatcropped = str_replace(' ', '_', $value->cropped_images);
      $this->email->attach('uploads/orders/'.$formatcropped);
    endforeach;
    $this->email->attach('uploads/pop/'.$order->proof_of_payment);
    return $this->sendMail('sales@cuadroph.com', 'Cuadro: Order Details', $this->buildOrderDetailsBody($order));
  }

  public function sendOrderDetailsCustomer($order_last_id)
  {
    $order = $this->Order_model->get($order_last_id);
    $attach = $this->Images_model->getImages($order->order_id);
    $i = 1; foreach ($attach as $key => $value):
    $formatcropped = str_replace(' ', '_', $value->cropped_images);
      $this->email->attach('uploads/orders/'.$formatcropped);
    endforeach;
    $this->email->attach('uploads/pop/'.$order->proof_of_payment);
    return $this->sendMail($order->email, 'Cuadro: Order Details', $this->buildOrderDetailsBodyCustomer($order));
  }

  public function sendInquiry($creds)
  {
    $this->sendMail('customersupport@cuadroph.com', $creds['subject'], $this->buildInquiryBody($creds));
  }

  public function sendMail($to, $subject, $message)
  {
    $this->email->from('sales@cuadroph.com', 'CUADRO: Wall Art in 5 Minutes!');
    $this->email->to($to);
    $this->email->subject($subject);
    $this->email->message($message);
    $this->email->cc('nmendoza@myoptimind.com, april@myoptimind.com, sfernando@myoptimind.com, rmagsakay@myoptimind.com');
    return $this->email->send();
  }

  public function buildInquiryBody($order)
  {
  	$messages = "Name: ".$order['name']."<br>".
  				"Email: ".$order['email']."<br>".
  				"Contact Number: ".$order['mobile']."<br>".
  				"Subject: ".$order['subject']."<br>".
  				"Message: ".$order['message']."<br>";
  	return $messages;
  }

  public function buildOrderDetailsBody($order)
  {
    $rates = $this->Rates_model->getRates();
      $i = 1; foreach ($rates as $key => $value):
      $picsnum = $this->Images_model->getImageUploadNumber($order->order_id);
      $additional = $picsnum - 3;
      $additionalprice = $value->additional_rate_per_frame * $additional;
      $formatadditional = number_format($additionalprice, 2, '.', ',');
      $formatbase = number_format($value->base_rate, 2, '.', ',');
      $formattotal = number_format($order->order_cost, 2, '.', ',');
    if( $order->sender_email) 
    {
      $message = "<h3>Customer Details:</h3><br>
                Sender Name: $order->sender_name<br>
                Sender Email: $order->sender_email<br>
                Sender Number: $order->sender_number<br><br>
                Recipient Name: $order->name<br>
                Recipient Email: $order->email<br>
                Recipient Number: $order->number<br><br>
                Address 1: $order->address_1<br>
                Address 2: $order->address_2<br>
                City: $order->city<br>
                State/Province: $order->state_province<br>
                Postal Code: $order->postal_code<br><br>
                <h3>Order Details</h3><br>
                Set of Frames ($order->order_type): $formatbase<br>
                Additional Frames x$additional: $formatadditional<br>
                Total Order Price: $formattotal<br>
                Mode of Payment: $order->mode_of_payment<br>
                Proof of Payment: Attached Below.";


    } else {
      $message = "<h3>Customer Details:</h3><br>
                Recipient Name: $order->name<br>
                Recipient Email: $order->email<br>
                Recipient Number: $order->number<br><br>
                Address 1: $order->address_1<br>
                Address 2: $order->address_2<br>
                City: $order->city<br>
                State/Province: $order->state_province<br>
                Postal Code: $order->postal_code<br><br>
                <h3>Order Details</h3><br>
                Set of Frames ($order->order_type): $formatbase<br>
                Additional Frames x$additional: $formatadditional<br>
                Total Order Price: $formattotal<br>
                Mode of Payment: $order->mode_of_payment<br>
                Proof of Payment: Attached Below.";
    }
  endforeach;
    return $message;
  }

  public function buildOrderDetailsBodyCustomer($order)
  {

    $rates = $this->Rates_model->getRates();
      $i = 1; foreach ($rates as $key => $value):
      $picsnum = $this->Images_model->getImageUploadNumber($order->order_id);
      $additional = $picsnum - 3;
      $additionalprice = $value->additional_rate_per_frame * $additional;
      $formatadditional = number_format($additionalprice, 2, '.', ',');
      $formatbase = number_format($value->base_rate, 2, '.', ',');
      $formattotal = number_format($order->order_cost, 2, '.', ',');
    if( $order->sender_email) 
    {
      $message = "<h3>Hello $order->sender_name,</h3><br>
                Many thanks for choosing Cuadro!<br><br>
                We are currently verifying your payment and will immediately be processing your order to <br>
                make sure that we fulfill our promise to you.<br><br>
                Please note that you will be receiving an Email Message from us, for the update on your order <br>
                and its delivery schedule.<br><br>
                Kindly see your order summary below : <br><br>

                _________________________<br><br>

                <h3>Customer Details:</h3>
                Sender Name: $order->sender_name<br>
                Sender Email: $order->sender_email<br>
                Sender Number: $order->sender_number<br><br>
                Recipient Name: $order->name<br>
                Recipient Email: $order->email<br>
                Recipient Number: $order->number<br>
                Address 1: $order->address_1<br>
                Address 2: $order->address_2<br>
                City: $order->city<br>
                State/Province: $order->state_province<br>
                Postal Code: $order->postal_code<br><br>
                <h3>Order Details</h3>
                Set of Frames ($order->order_type): $formatbase<br>
                Additional Frames x$additional: $formatadditional<br>
                Total Order Price: $formattotal<br>
                Mode of Payment: $order->mode_of_payment<br>
                Proof of Payment: Attached Below.<br><br>

                _________________________<br><br>

                We look forward to serving you again!<br><br>
                <img src='".base_url('public/frontend/images/cuadro-frames-logo.jpg')."'>
                <br><br>sales@cuadroph.com<br>
                0999-585-1756";


    } else {
      $message = "<h3>Hello $order->name,</h3><br>
                Many thanks for choosing Cuadro!<br><br>
                We are currently verifying your payment and will immediately be processing your order to <br>
                make sure that we fulfill our promise to you.<br><br>
                Please note that you will be receiving an Email Message from us, for the update on your order <br>
                and its delivery schedule.<br><br>
                Kindly see your order summary below : <br><br>

                _________________________<br><br>

                <h3>Customer Details:</h3>
                Recipient Name: $order->name<br>
                Recipient Email: $order->email<br>
                Recipient Number: $order->number<br>
                Address 1: $order->address_1<br>
                Address 2: $order->address_2<br>
                City: $order->city<br>
                State/Province: $order->state_province<br>
                Postal Code: $order->postal_code<br><br>
                <h3>Order Details</h3><br>
                Set of Frames ($order->order_type): $formatbase<br>
                Additional Frames x$additional: $formatadditional<br>
                Total Order Price: $formattotal<br>
                Mode of Payment: $order->mode_of_payment<br>
                Proof of Payment: Attached Below.<br><br>
                _________________________<br><br>

                We look forward to serving you again!<br><br>
                <img src='".base_url('public/frontend/images/cuadro-frames-logo.jpg')."'>
                <br><br>sales@cuadroph.com<br>
                0999-585-1756";
    }
  endforeach;

    return $message;
  }

} 