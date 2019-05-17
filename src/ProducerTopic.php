<?php


namespace RdKafka;


abstract class ProducerTopic
{
    /**
     * Produce and send a single message
     * @param int $partition
     * @param int $msgflags
     * @param string $payload
     * @param string $key
     * @return void
     * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka-producertopic.produce.html
     * @since 0.9.1
     */
    public function produce(int $partition, int $msgflags, string $payload, string $key = NULL): void { }

    /**
     * Produce and send a single message
     * @param int $partition
     * @param int $msgflags
     * @param string $payload
     * @param string $key
     * @param array $headers
     * @return void
     * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka-producertopic.produce.html
     * @since 0.9.1
     */
    public function producev(int $partition, int $msgflags, string $payload, string $key, array $headers): void { }
}