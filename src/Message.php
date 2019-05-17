<?php


namespace RdKafka;

/**
 * Class Message
 * @package RdKafka
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/class.rdkafka-message.html
 */
class Message
{
    public $err;
    public $topic_name;
    public $partition;
    public $payload;
    public $key;
    public $offset;

    /**
     * Get the error as string
     * @return string
     */
    public function errstr(): string { }

    /**
     * Get the message headers
     * @return string
     */
    public function headers(): string { }
}