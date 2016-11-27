<?php
namespace Api\Helper;
class Mail {

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

        $apiKey = getenv('SENDGRID_API_KEY');
        $sg = new \SendGrid($apiKey);
        var_dump($sg);exit;
        $response = $sg->client->mail()->send->post($mail);
        return $response->statusCode();
    }
}