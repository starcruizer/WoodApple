<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Email extends CI_Controller 
{
    public function index()
    {
        $this->load->view('email/email');
    }
}

// require_once('../../assets/ses.php');

// $ses = new SimpleEmailService('AKIAIOAJSGI553N3OX2Q', 'OpXR1delZIxKmACjjamFKyB5Q7bqHKxphXTTBNNP');
// $m = new SimpleEmailServiceMessage();

// $message = "Hello reciever. Nice to meet you";
// //$m->setheaders("Content-type:text/html;charset=UTF-8" . "\r\n");
// //note that from and to emails must be verified using AWS SES dashboard.  Can remove limitations here https://aws-portal.amazon.com/gp/aws/html-forms-controller/contactus/SESProductionAccess2011Q3.
// $m->addTo('shakebameen@mail.com');
// $m->setFrom('no-reply@wood-apple.co.in');
// $m->setSubject('Hello World');
// $m->setMessageFromString($message);

// var_dump($ses->sendEmail($m));
