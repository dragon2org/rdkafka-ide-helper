<?php


namespace RdKafka;


class KafkaConsumer
{
    /**
     * KafkaConsumer constructor.
     *
     * The conf object must have group.id set to the consumer group to join.
     *
     * example.
     * $conf = new RdKafka\Conf();
     * $conf->set("group.id", "myGroupID");
     *
     * $kafkaConsumer = new RdKafka\KafkaConsumer($conf);
     * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka-consumertopic.consume.html
     * @param RdKafka\Conf $conf
     */
    public function __construct(RdKafka\Conf $conf)
    {

    }

    /**
     * Update the assignment set
     * @param array $topic_partitions Array of RdKafka\TopicPartition to assign
     * @throws RdKafka\Exception
     * @return void
     * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka-kafkaconsumer.commit.html
     */
    public function assign(array $topic_partitions = []): void
    {

    }

    /**
     * Commit offsets
     * @param $message_or_offsets
     * When NULL, commit offsets for the current assignment.
     * When a RdKafka\Message, commit offset for a single topic+partition based on the message.
     * When an array of RdKafka\TopicPartition, commit offsets for the provided list of partitions.
     * @throws RdKafka\Exception
     * @return void
     * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka-kafkaconsumer.commit.html
     */
    public function commit($message_or_offsets): void
    {

    }

    /**
     * Commit offsets asynchronously
     * @param array $message_or_offsets
     * @return void
     * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka-kafkaconsumer.commitasync.html
     */
    public function commitAsync(array $message_or_offsets): void
    {

    }

    /**
     * Consume message and triggers callbacks
     *
     * @param string $timeout_ms
     * @return RdKafka\Message
     * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka-kafkaconsumer.consume.html
     */
    public function consume(string $timeout_ms): Rdkafka\Message
    {

    }

    /**
     * Returns the current partition assignment
     *
     * @throws RdKafka\Exception
     * @return array RdKafka\TopicPartition
     * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka-kafkaconsumer.getassignment.html
     */
    public function getAssignment(): array
    {

    }

    /**
     * Returns the commited offsets
     *
     * @return array
     * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka-kafkaconsumer.getcommitedoffsets.html
     */
    public function getCommitedOffsets() :array
    {

    }

    /**
     * Request Metadata from broker
     *
     * @param bool $all_topics
     * TRUE, request info about all topics in cluster.
     * False only request info about locally known topics.
     * @param RdKafka\KafkaConsumerTopic|NULL $only_topic  When non-null, only request info about this topic
     * @param int $timeout_ms
     * @return array
     * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka-kafkaconsumer.getmetadata.html
     */
    public function getMetadata(bool $all_topics ,
                                RdKafka\KafkaConsumerTopic $only_topic = NULL ,
                                int $timeout_ms) : array
    {

    }

    /**
     *  Return the current subscription
     *
     * @return array topic names
     * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka-kafkaconsumer.getsubscription.html
     */
    public function getSubscription() : array
    {

    }

    /**
     * Update the subscription set
     *
     * @param array $topics
     * Array of topic names.
     *
     * Regex pattern matching automatically performed for topics prefixed with ^ (e.g. ^myPfx[0-9]_.*)
     * @return void
     * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka-kafkaconsumer.subscribe.html
     */
    public function subscribe(array $topics ) : void
    {

    }

    /**
     * Unsubscribe from the current subscription set
     * @throws RdKafka\Exception
     */
    public function unsubscribe()
    {

    }
}