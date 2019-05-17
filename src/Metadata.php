<?php


namespace RdKafka;

/**
 * The Metadata class represents broker information. Metadata instances are returned by RdKafka::getMetadata() and RdKafka\KafkaConsumer::getMetadata().
 * Class Metadata
 * @package RdKafka
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/class.rdkafka-metadata.html
 */
class Metadata
{
    /**
     * Get broker list
     * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka-metadata.getbrokers.html
     * @return  RdKafka\Metadata\Collection
     */
    public function getBrokers(): void { }

    /**
     * Get the broker id originating this metadata
     * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka-metadata.getorigbrokerid.html
     * @return  RdKafka\Metadata\Collection
     */
    public function getOrigBrokerId(): void { }

    /**
     * Get the broker name originating this metadata
     * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka-metadata.getorigbrokername.html
     * @return  string broker name originating this metadata
     */
    public function getOrigBrokerName() :string { }

    /**
     * Get the topic list
     * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/class.rdkafka-metadata-collection.html
     * @return RdKafka\Metadata\Collection
     */
    public function getTopics() :RdKafka\Metadata\Collection { }
}