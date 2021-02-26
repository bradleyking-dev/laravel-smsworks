<?php


namespace BradleyKingDev\LaravelSMSWorks\Services;


use BradleyKingDev\LaravelSMSWorks\Jobs\SendSMS;
use Swagger\Client\ApiException;
use Swagger\Client\Model\Message;

class SMSWorks
{

    /**
     * @var mixed
     */
    private $sender;

    /**
     * SMS constructor.
     */
    public function __construct()
    {
        $this->sender = env('SMSWORKS_SENDFROM');
    }

    /**
     * Send an SMS message
     *
     * @param string $destination
     * @param string $content
     */
    public function sendMessage(string $destination, string $content)
    {
        $data = [
            "sender" => $this->sender,
            "destination" => $destination,
            "content" => $content
        ];

        $message = new Message($data);

        SendSMS::dispatch($message);
    }
}