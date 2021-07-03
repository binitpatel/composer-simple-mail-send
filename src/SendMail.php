<?php 

namespace binitpatel\CompoerSimpleMailSend;

class SendMail
{
    public $to = "xyz@somedomain.com";
    public $subject = "This is subject";
    public $message='';
    public $header ='';

    public function sendemail()
    {
        $retval = mail ($this->to,$this->subject,$this->message,$this->header);
         
         if( $retval == true ) {
            return "Message sent successfully...";
         }else {
            return "Message could not be sent...";
         }
    }
}
