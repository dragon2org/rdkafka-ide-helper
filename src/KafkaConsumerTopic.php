<?php


namespace RdKafka;

/**
 * This class represents a topic when using the RdKafka\KafkaConsumer. It can not be instantiated directly, RdKafka\KafkaConsumer::newTopic() should be used instead.
 * Class KafkaConsumerTopic
 * @package RdKafka
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/class.rdkafka-kafkaconsumertopic.html
 */
abstract class KafkaConsumerTopic extends Topic
{
    /**
     * Store offset
     * @param int $partition
     * @param int $offset
     * @return void
     * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka-kafkaconsumertopic.offsetstore.html
     */
    public function offsetStore(int $partition, int $offset): void { }
}