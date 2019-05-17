<?php


namespace RdKafka;


class ConsumerTopic
{
    /**
     * Consume a single message from a partition
     * @param int $partition The partition to consume
     * @param int $timeout_ms The maximum amount of time to wait for a message to be received.
     * @return RdKafka\Message | null
     * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka-consumertopic.consume.html
     */
    public function consume(int $partition, int $timeout_ms) { }

    /**
     * Pipe a partition to a queue
     * @param int $partition
     * @param int $offset
     * @param RdKafka\Queue $queue
     * @return void
     * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka-consumertopic.consumequeuestart.html
     */
    public function consumeQueueStart(int $partition, int $offset, RdKafka\Queue $queue): void { }

    /**
     * Start consuming messages
     * @param int $partition
     * @param int $offset
     * @return void
     * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka-consumertopic.consumestart.html
     */
    public function consumeStart(int $partition, int $offset): void { }

    /**
     *  Stop consuming messages from partition
     * @param int $partition
     * @param int $offset
     * @return void
     * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka-consumertopic.consumestop.html
     */
    public function consumeStop(int $partition): void { }

    /**
     * Store offset
     * @param int $partition
     * @param int $offset
     * @return void
     * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka-consumertopic.offsetstore.html
     */
    public function offsetStore(int $partition , int $offset ):void { }
}