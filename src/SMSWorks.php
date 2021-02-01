<?php


namespace BradleyKingDev\LaravelSMSWorks;


use Illuminate\Support\Facades\Facade;

/**
 * @see \BradleyKingDev\LaravelSMSWorks\Services\SMS
 */
class SMSWorks extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     *
     * @throws \RuntimeException
     */
    protected static function getFacadeAccessor()
    {
        return 'smsworks';
    }
}