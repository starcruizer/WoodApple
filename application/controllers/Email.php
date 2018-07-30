<?php
defined('BASEPATH') OR exit('No direct script access allowed');


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

        //String Building 
        $html_message = '   <html>  '  . 
        '   <head>  '  . 
        '   	<title></title>  '  . 
        '   	<link href="https://svc.webspellchecker.net/spellcheck31/lf/scayt3/ckscayt/css/wsc.css" rel="stylesheet" type="text/css" />  '  . 
        '   	<link href="https://svc.webspellchecker.net/spellcheck31/lf/scayt3/ckscayt/css/wsc.css" rel="stylesheet" type="text/css" />  '  . 
        '   	<link href="https://svc.webspellchecker.net/spellcheck31/lf/scayt3/ckscayt/css/wsc.css" rel="stylesheet" type="text/css" />  '  . 
        '   	<link href="https://svc.webspellchecker.net/spellcheck31/lf/scayt3/ckscayt/css/wsc.css" rel="stylesheet" type="text/css" />  '  . 
        '   	<link href="https://svc.webspellchecker.net/spellcheck31/lf/scayt3/ckscayt/css/wsc.css" rel="stylesheet" type="text/css" />  '  . 
        '   	<link href="https://svc.webspellchecker.net/spellcheck31/lf/scayt3/ckscayt/css/wsc.css" rel="stylesheet" type="text/css" />  '  . 
        '   	<link href="https://svc.webspellchecker.net/spellcheck31/lf/scayt3/ckscayt/css/wsc.css" rel="stylesheet" type="text/css" />  '  . 
        '   	<link href="https://svc.webspellchecker.net/spellcheck31/lf/scayt3/ckscayt/css/wsc.css" rel="stylesheet" type="text/css" />  '  . 
        '   	<link href="https://svc.webspellchecker.net/spellcheck31/lf/scayt3/ckscayt/css/wsc.css" rel="stylesheet" type="text/css" />  '  . 
        '   </head>  '  . 
        '   <body aria-readonly="false" data-gramm="true" data-gramm_editor="true" data-gramm_id="370a4f74-d73c-d07e-e4fe-13847a87fe2f" style="cursor: auto;">  '  . 
        '   <table align="center" border="0" cellpadding="1" cellspacing="1" style="height:368px; width:665px">  '  . 
        '   	<tbody>  '  . 
        '   		<tr>  '  . 
        '   			<td style="width:306px"><img alt="Wood Apple" src="https://www.wood-apple.co.in/assets/images/woodapple-logo.png" style="height:100px; width:304px" /></td>  '  . 
        '   			<td style="width:355px">  '  . 
        '   			<h2><span style="color:#EB2D90"><em><span style="font-family:verdana,geneva,sans-serif">Here&#39;s the copy of </span></em></span><span style="font-family:verdana,geneva,sans-serif"><em><span style="color:#EB2D90"><g class="gr_ gr_15 gr-alert gr_gramm gr_inline_cards gr_run_anim Grammar only-ins replaceWithoutSep" data-gr-id="15" id="15">response</g></span></em></span><span style="color:#EB2D90"><em><span style="font-family:verdana,geneva,sans-serif"> that you requested</span></em></span>&nbsp;</h2>  '  . 
        '   			</td>  '  . 
        '   		</tr>  '  . 
        '   		<tr>  '  . 
        '   			<td colspan="2" style="width:306px">  '  . 
        '   			<table align="left" border="0" cellpadding="1" cellspacing="1" style="height:100%; width:100%">  '  . 
        '   				<tbody>  '  . 
        '   					<tr>  '  . 
        '   						<td>  '  . 
        '   						<pre>  '  . 
        '   <span style="font-family:comic sans ms,cursive">Name</span></pre>  '  . 
        '   						</td>  '  . 
        '   						<td>&nbsp;'.$name.'</td>  '  . 
        '   					</tr>  '  . 
        '   					<tr>  '  . 
        '   						<td>  '  . 
        '   						<pre>  '  . 
        '   <span style="font-family:comic sans ms,cursive">Email</span></pre>  '  . 
        '   						</td>  '  . 
        '   						<td>&nbsp;'.$email.'</td>  '  . 
        '   					</tr>  '  . 
        '   					<tr>  '  . 
        '   						<td>  '  . 
        '   						<pre>  '  . 
        '   <span style="font-family:comic sans ms,cursive">Purpose</span></pre>  '  . 
        '   						</td>  '  . 
        '   						<td>&nbsp;'.$purpose.'</td>  '  . 
        '   					</tr>  '  . 
        '   					<tr>  '  . 
        '   						<td>  '  . 
        '   						<pre>  '  . 
        '   <span style="font-family:comic sans ms,cursive">Message</span></pre>  '  . 
        '   						</td>  '  . 
        '   						<td>&nbsp;'.$message.'</td>  '  . 
        '   					</tr>  '  . 
        '   				</tbody>  '  . 
        '   			</table>  '  . 
        '   			<br />  '  . 
        '   			&nbsp;</td>  '  . 
        '   		</tr>  '  . 
        '   		<tr>  '  . 
        '   			<td colspan="2" style="width:306px">  '  . 
        '   			<div><br />  '  . 
        '   			<span style="font-family:verdana,geneva,sans-serif">Thankyou for contacting us. You&#39;ll hear from us shortly.</span></div>  '  . 
        '     '  . 
        '   			<div><br />  '  . 
        '   			&nbsp;</div>  '  . 
        '     '  . 
        '   			<div><span style="font-family:verdana,geneva,sans-serif">Wood apple<br />  '  . 
        '   			N-3/192, I.R.C village<br />  '  . 
        '   			Bhubaneswar, Odisha-751015</span><br />  '  . 
        '   			<br />  '  . 
        '   			<span style="font-family:courier new,courier,monospace"><span style="color:#B22222"><g class="gr_ gr_16 gr-alert gr_gramm gr_inline_cards gr_run_anim Style multiReplace" data-gr-id="16" id="16">NOTE :</g> Do Not Reply to this email. This email has been generated by the system.</span></span></div>  '  . 
        '   			</td>  '  . 
        '   		</tr>  '  . 
        '   	</tbody>  '  . 
        '   </table>  '  . 
        '   </body>  '  . 
        '   </html>  '  . 
        '    ' ;

        //configuring mail server settings
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.zoho.com';
        $config['smtp_port'] = '465';
        $config['smtp_user'] = 'no-reply@wood-apple.co.in';
        $config['smtp_pass'] = 'woodapple123';
        $config['smtp_charset'] = 'utf-8';
        $config['newline'] = "\r\n";
        $config['mail_type'] = "html";
        $config['validation'] = "TRUE";

        $this->load->library('email',$config);
        
        //sending a copy to WA support person
        $this->email->from('no-reply@wood-apple.co.in', 'Wood Apple System Generated');
        $this->email->to($email);
        $this->email->subject('No Reply - Wood Apple');
        $this->email->message($html_message);
        if($this->email->send()) echo 'success';

    }
}


