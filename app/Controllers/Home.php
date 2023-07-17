<?php

namespace App\Controllers;

use CodeIgniter\Email\Email;
class Home extends BaseController
{
    public function index()
    { 
        //return view('emails/nuevo_usuario');
        //Primera forma, funciona

        $user_data = [
            'name' => 'Juan Garcia',//$this->request->getPost('name'),
            'username' => 'juan.garcia',//$this->request->getPost('username'),
            'password' => '123456', //$password?
        ];
        $email = \Config\Services::email();
        $email->setTo('ivan.yanu@gmail.com');//$this->request->getPost('email')
        $email->setSubject('Bienvenido a Credencial Payments');
        $email->setMessage(view('emails/nuevo_usuario', $user_data));
        $send = $email->send();


        /*
        //Segunda forma, carga las variables pero no envía el correo
        $config = array(
            'protocol' => 'smtp',
            'SMTPHost' => 'sandbox.smtp.mailtrap.io',
            'SMTPUser' => '024702e0c51c59',
            'SMTPPass' => 'ebf49f49297802',
            'SMTPPort' => 2525,
            'wordWrap' => true,
            'mailType' => 'text', //'text' or 'html'
        );
        $email = new Email($config);//CodeIgniter\Email\Email;
        $email->setTo('ivan.yanu@gmail.com');
        $email->setSubject('Email Testdfsdf');
        $email->setMessage('Testing the email class.');
        $send = $email->send();
        */
        /*
        //Tercera forma, da error
        $email->protocol('smtp');
        $email->SMTPHost('sandbox.smtp.mailtrap.io');
        $email->SMTPUser('024702e0c51c59');
        $email->SMTPPass('ebf49f49297802');
        $email->SMTPPort(2525);
        $email->wordWrap(true);
        $email->mailType('text'); //'text' or 'html'
        $email = new Email();//CodeIgniter\Email\Email;
        $email->setTo('ivan.yanu@gmail.com');
        $email->setSubject('Email Testdfsdf');
        $email->setMessage('Testing the email class.');
        $send = $email->send();
        */
        return 'ivan.yanu@gmail.com'.print_r($send);
        return view('welcome_message');
    }
}
