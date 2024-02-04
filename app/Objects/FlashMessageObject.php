<?php

namespace App\Objects;

class FlashMessageObject
{
    public string $title;
    public ?string $message = '';

    /**
     * Time in milliseconds
     */
    public ?int $displayTime = 3000;
    public ?int $code = 0;
    public ?string $formSubmitId = 'form-0';
    public ?string $onConfirmRoute; //TODO: Not implemented !!! Now is work like submit form with id in $formSubmitId, in form on page u must define same id like attribute <form ... id="x">
    public ?string $onDisagreeRoute; //TODO: Not implemented !!! Now is work like on unsubmit form
}
