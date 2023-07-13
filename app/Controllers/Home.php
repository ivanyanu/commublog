<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $email = \Config\Services::email();

        $config = array(
            'protocol' => 'smtp',
            'SMTPHost' => 'sandbox.smtp.mailtrap.io',
            'SMTPUser' => '024702e0c51c59',
            'SMTPPass' => 'ebf49f49297802',
            'SMTPPort' => 2525,
            'wordWrap' => true,
        );

        $email->initialize($config);

        $email->setFrom('your@example.com', 'Your Name');
        $email->setTo('ivan.yanu@gmail.com');
        $email->setSubject('Email Test');
        $email->setMessage('Testing the email class.');

        $send = $email->send();
        return 'ivan.yanu@gmail.com'.print_r($send);
        return view('welcome_message');
    }
}
