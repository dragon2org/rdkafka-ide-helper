<?php


namespace RdKafka;


class TopicConf
{
    /**
     * Dump the configuration
     * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka-topicconf.dump.html
     * @return void
     * @since 0.9.1
     */
    public function dump(): void { }

    /**
     * Set configuration
     * @param string $name
     * @param string $value
     * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka-topicconf.set.html
     * @return void
     * @since 0.9.1
     */
    public function set(string $name, string $value): void { }

    /**
     * Set partitioner
     * @param int $partitioner
     * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka-topicconf.setpartitioner.html
     * @return void
     * @since 0.9.1
     */
    public function setPartitioner(int $partitioner ):void { }
}