<?php

namespace BradleyKingDev\LaravelSMSWorks\Jobs;

use GuzzleHttp\Client;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Swagger\Client\Api\MessagesApi;
use Swagger\Client\ApiException;
use Swagger\Client\Configuration;
use Swagger\Client\Model\Message;

class SendSMS implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * @var Message
     */
    protected $message;


    /**
     * SMS constructor.
     * @param Message $message
     */
    public function __construct(Message $message)
    {
        $this->message = $message;
    }

    /**
     * Execute the job.
     *
     * @return void
     * @throws ApiException
     */
    public function handle()
    {
        $apiKey = env('SMSWORKS_KEY');

        // Configure API key authorization: JWT
        $config = Configuration::getDefaultConfiguration()->setApiKey('Authorization', $apiKey);

        $apiInstance = new MessagesApi(
            new Client(),
            $config
        );

        if ($this->attempts() < env('SMSWORKS_ATTEMPTS', 1)) {
            $result = $apiInstance->sendMessage($this->message);
        }
    }
}