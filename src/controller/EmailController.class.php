<?php
use libs\system\Controller;
use src\service\mail\SamaneMailing;

class EmailController extends Controller
{
    public function __construct(){
        parent::__construct();
    }
    public function sendMail()
    {
        $mail = new SamaneMailing();

        
        $from = 'diopdavid94@gmail.com';
        $companyName = 'LALANE TECH-SERVICE';
        $recipients = array('diopdavid94@gmail.com');
        $subject = 'Samane Information';
        $body = 'Samane vous remercie de votre engagement. <b>Samane PHP Framework</b>';
        $replyTo = null;
        $cc = null;
        $bcc = null;
        /**
         * optional
         * your can define $attachments to null
         * Example: $attachments = null;
         */
        $attachments = array('public/folder/pdf/samane.pdf');
            
        $result = $mail->sendMail($from, $companyName, $recipients, $replyTo, $cc, $bcc, $attachments , $subject, $body);
        
        if($result)
        {
            $data['emailResult'] = 'Message sent successfully';
        } else {
            $data['emailResult'] = 'Message could not be sent';
        }
        
        return $this->view->load("email/index", $data);

    }
    /*
    public function sendMail()
    {
        $mail = new SamaneMailing();

        
        $from = 'ngorseckjee@gmail.com';
        $companyName = 'SAMANE FRAMEWORK';
        $recipients = array('ngorsecka@gmail.com');
        $subject = 'Samane Information';
        $body = 'Samane vous remercie de votre engagement. <b>Samane PHP Framework</b>';
        $replyTo = null;
        $cc = null;
        $bcc = null;
        
        $attachments = array('public/folder/pdf/samane.pdf');
            
        $result = $mail->sendMail($from, $companyName, $recipients, $replyTo, $cc, $bcc, $attachments , $subject, $body);
        
        if($result)
        {
            $mail = 'ok';
        } else {
            $mail = 'nok';
        }
        
        return $this->view->redirect("Login/send?message=$mail");

    }
    public function send()
    {
        if(isset($_GET['message']))
        {
            if($_GET['message'] == 'ok')
            {
                $data['emailResult'] = 'Message sent successfully';
            } else {
                $data['emailResult'] = 'Message could not be sent';
            }
        }
        return $this->view->load("email/index", $data);

    }
    */
}
?>