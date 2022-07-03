<?php

namespace App\Helpers;

class Flashdata
{
    public static function success_alert($message)
    {
        session()->flash('type', 'primary');
        session()->flash('message', $message);
    }
    public static function danger_alert($message)
    {
        session()->flash('type', 'danger');
        session()->flash('message', $message);
    }
    public static function warning_alert($message)
    {
        session()->flash('type', 'warning');
        session()->flash('message', $message);
    }
}
