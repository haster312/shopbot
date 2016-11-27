<?php
namespace Api\Helper;
use SendGrid\Email;
use SendGrid;
require "../../vendor/autoload.php";
class Mail {

    public static function createMailer() {
        $apiKey = getenv('SENDGRID_API_KEY');
        $sg = new \SendGrid($apiKey);
        return $sg;
    }

    /**
     * Send Mail
     * @param $fromEmail
     * @param $subject
     * @param $toEmail
     * @param $body
     * @return mixed
     */
    public static function sendMail($fromEmail, $subject, $toEmail, $body) {

        $from    = new \SendGrid\Email(null, $fromEmail);
        //Subject = "";
        $to      = new \SendGrid\Email(null, $toEmail);
        $body    = new \SendGrid\Content("text/html", $body);
        $mail    = new \SendGrid\Mail($from, $subject, $to, $body);

        $sg = Mail::createMailer();
        $response = $sg->client->mail()->send->post($mail);
        return $response->statusCode();
    }
}