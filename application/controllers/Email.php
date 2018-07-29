<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//require_once('email_cooked_html.php');

class Email extends CI_Controller 
{
    public function index()
    {
        $this->load->view('email/email');
    }

    public function send()
    {

        //fetching details
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $purpose = $this->input->post('purpose');
        $message = $this->input->post('message');
        $copy = $this->input->post('copy');

        //configuring mail server settings
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.zoho.com';
        $config['smtp_port'] = '465';
        $config['smtp_user'] = 'no-reply@wood-apple.co.in';
        $config['smtp_pass'] = 'woodapple123';
        $config['smtp_charset'] = 'iso-8859-1';
        $config['newline'] = "\r\n";
        $config['mail_type'] = "html";
        $config['validation'] = "TRUE";
        

        
        $this->load->library('email',$config);
        
        //sending a copy to conatct person
        $this->email->from('no-reply@wood-apple.co.in', 'Wood Apple System Generated');
        $this->email->to($email);
        $this->email->subject('No Reply - Wood Apple');
        $this->email->message($message.'<br>'.$message);
        $this->email->send();
        echo 'success';
        

    }
}


