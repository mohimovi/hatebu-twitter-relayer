<?php

namespace App\HatenaBookmark;

class EventEntity
{
    public $username;
    public $title;
    public $url;
    public $bookmarkCount;
    public $permalink;
    public $status;
    public $comment;
    public $timestamp;
    public $isPrivate;
    public $key;
    public $client;
    public $color;
    public $quote;

    public function verify()
    {
        return $this->key === getenv('HATENABOOKMARK_PRESHARED_KEY');
    }

    public function validate()
    {
        // FIXME:
        return true;
    }
}
