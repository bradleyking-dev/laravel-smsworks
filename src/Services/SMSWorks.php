<?php


namespace BradleyKingDev\LaravelSMSWorks\Services;


use Swagger\Client\ApiException;
use Swagger\Client\Model\Message;

class SMSWorks
{
    /**
     * @var mixed
     */
    private $apiKey;

    /**
     * @var \Swagger\Client\Api\MessagesApi
     */
    private $apiInstance;
    /**
     * @var mixed
     */
    private $sender;

    /**
     * src constructor.
     */
    public function __construct()
    {
        $this->apiKey = env('SMSWORKS_KEY');
        $this->sender = env('SMSWORKS_SENDFROM');

        // Configure API key authorization: JWT
        $config = \Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', $this->apiKey);

        $this->apiInstance = new \Swagger\Client\Api\MessagesApi(
            new \GuzzleHttp\Client(),
            $config
        );
    }

    /**
     * Send an src message
     *
     * @param string $destination
     * @param string $content
     * @return \Swagger\Client\Model\SendMessageResponse
     * @throws \Swagger\Client\ApiException
     */
    public function sendMessage(string $destination, string $content)
    {
        $data = [
            "sender" => $this->sender,
            "destination" => $destination,
            "content" => $content
        ];

        $sms_message = new Message($data);

        try {
            $result = $this->apiInstance->sendMessage($sms_message);
        } catch (\Exception | ApiException $e) {
            throw $e;
        }

        return $result;
    }
}