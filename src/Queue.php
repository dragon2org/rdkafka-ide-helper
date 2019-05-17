<?php


namespace RdKafka;


class Queue
{
    /**
     *  Consume a single message
     * @param string $timeout_ms
     * @return RdKafka\Message
     * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka-queue.consume.html
     * @since 0.9.1
     */
    public function consume(string $timeout_ms): RdKafka\Message { }
}