<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
use App\Emails;

class EmailController extends Controller
{
    public function index(){
        return view('emailForm');
    }

    public function sendMyMail(Request $request){
        $name = $request->name;
        $email = $request->email;
        $subject = $request->subject;
        $message = $request->message;

        require base_path('vendor\autoload.php');

        $mail = new PHPMailer(true);

        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->SMTPDebug = 0;

        $mail->Host = 'smtp.mailtrap.io';
        $mail->Port = 2525;
        $mail->SMTPAuth = true;
        $mail->Username = '67e0e078490d58';
        $mail->Password = '4b6ac2c8418f62';
        $mail->setFrom($email, 'First Last');
        $mail->addAddress('whoto@example.com', 'John Doe');
        $mail->Subject = $subject;
        //$mail->msgHTML(file_get_contents('contents.html'), __DIR__);
        $mail->addStringAttachment(file_get_contents(base_path('resources\views\template.blade.php')), __DIR__);
        $mail->AltBody = 'This is a plain-text message body';

        //$fileName = base_path('public/ok.jpg');
        //$mail->addAttachment($fileName);


        $mail->isHTML(true);
        $mail->Body = $message;

        if (!$mail->send()) {
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo 'Message sent!';
            $data = new Emails;
            $data->subject = $subject;
            $data->to = 'test@gmail.com';
            $data->from = $email;
            $data->description = $message;
            $data->save();

            //return redirect('home')->with('msg','Message sent!');
        }
    }
}
