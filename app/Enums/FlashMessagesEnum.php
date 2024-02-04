<?php

namespace App\Enums;

enum FlashMessagesEnum: string
{
    case ERROR = 'error';
    case INFO = 'info';
    case WARN = 'warn';
    /**
     * Dont forget to define the form id in FlashMessageObject like FlashMessageObject->formSubmitId and add same id on form, which u want to submit after confirm like <form ... id="x">
     */
    case WARN_CONFIRM = 'warn-confirm';
    case SUCCESS = 'success';
}
