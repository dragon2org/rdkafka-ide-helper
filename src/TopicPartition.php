<?php


namespace RdKafka;


class TopicPartition
{
    /**
     * TopicPartition constructor.
     * @param string $topic
     * @param int $partition
     * @param int|NULL $offset
     * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka-topicpartition.construct.html
     */
    public function __construct(string $topic, int $partition, int $offset = NULL) { }

    /**
     * Get the offset
     * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka-topicpartition.getoffset.html
     * @return int
     * @since 0.9.1
     */
    public function getOffset(): int { }

    /**
     * Get the partition ID
     * https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka-topicpartition.getpartition.html
     * @return int
     * @since 0.9.1
     */
    public function getPartition(): int { }

    /**
     * Get the topic name
     * https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka-topicpartition.gettopic.html
     * @return string
     * @since 0.9.1
     */
    public function getTopic(): string { }

    /**
     * Set the offset
     * https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka-topicpartition.setoffset.html
     * @return string
     * @since 0.9.1
     */
    public function setOffset(): string { }

    /**
     * Set the partition ID
     * https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka-topicpartition.setpartition.html
     * @return void
     * @since 0.9.1
     */
    public function setPartition(string $partition): void { }

    /**
     * Set the topic name
     * https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka-topicpartition.settopic.html
     * @return void
     * @since 0.9.1
     */
    public function setTopic(string $topic_name):void {}
}