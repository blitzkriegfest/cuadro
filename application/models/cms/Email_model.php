<?php

class Email_model extends Admin_core_model
{

  function __construct()
  {
    parent::__construct();

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
    return $this->sendMail('rmagsakay@myoptimind.com', 'Cuadro: Order Details', $this->buildOrderDetailsBody($order));
  }

  public function sendInquiry($creds)
  {
    $this->sendMail('rmagsakay@myoptimind.com', $creds['subject'], $creds['message']);
  }

  public function sendMail($to, $subject, $message)
  {
    $this->email->from('rmagsakay@myoptimind.com', 'CUADRO');
    $this->email->to($to);
    $this->email->subject($subject);
    $this->email->message($message);
    $this->email->cc('nmendoza@myoptimind.com');
    return $this->email->send();
  }

   public function buildInquiryBody($creds)
  {
    // $message = " Name: $creds['name']<br>
    //             Email: $creds['email']<br>
    //             Contact Number: $creds['contact']<br>
    //             Subject: $creds['subject']<br>
    //             Message: $creds['message']";
  }

  public function buildOrderDetailsBody($order)
  {
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
                Order type: $order->order_type<br>
                Order Cost: $order->order_cost<br>";


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
                Order type: $order->order_type<br>
                Order Cost: $order->order_cost<br>";
    }

    return $message;
  }

} 