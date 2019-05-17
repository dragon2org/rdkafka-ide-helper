<?php

/**
 * Fatal run-time errors. These indicate errors that can not be
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_CONSUMER', 1);

/**
 * Start consuming from beginning of kafka partition queue: oldest msg.
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_OFFSET_BEGINNING', 1);

/**
 * Start consuming from end of kafka partition queue: next msg.
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_OFFSET_END', 1);

/**
 * Start consuming from offset retrieved from offset store.
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_OFFSET_STORED', 1);

/**
 * The unassigned partition is used by the producer API for messages that should be partitioned using the configured or default partitioner.
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_PARTITION_UA', 1);

/**
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_PRODUCER', 1);

/**
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_VERSION', 1);

/**
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR__BEGIN', 1);

/**
 * Local: Bad message format
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR__BAD_MSG', 1);

/**
 * Local: Invalid compressed data
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR__BAD_COMPRESSION', 1);

/**
 * Local: Broker handle destroyed
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR__DESTROY', 1);

/**
 * Local: Communication failure with broker
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR__FAIL', 1);

/**
 * Local: Broker transport failure
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR__TRANSPORT', 1);

/**
 * Local: Critical system resource failure
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR__CRIT_SYS_RESOURCE', 1);

/**
 * Local: Host resolution failure
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR__RESOLVE', 1);
/**
 * Local: Message timed out
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR__MSG_TIMED_OUT', 1);

/**
 * Broker: No more messages
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR__PARTITION_EOF', 1);

/**
 * Local: Unknown partition
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR__UNKNOWN_PARTITION', 1);

/**
 * Local: File or filesystem error
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR__FS', 1);

/**
 * Local: Unknown topic
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR__UNKNOWN_TOPIC', 1);

/**
 * Local: All broker connections are down
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR__ALL_BROKERS_DOWN', 1);

/**
 * Local: Invalid argument or configuration
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR__INVALID_ARG', 1);

/**
 * Local: Timed out
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR__TIMED_OUT', 1);

/**
 * Local: Queue full
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR__QUEUE_FULL', 1);

/**
 * Local: ISR count insufficient
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR__ISR_INSUFF', 1);

/**
 * Local: Broker node update
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR__NODE_UPDATE', 1);

/**
 * Local: SSL error
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR__SSL', 1);

/**
 * Local: Waiting for coordinator
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR__WAIT_COORD', 1);

/**
 * Local: Unknown group
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR__UNKNOWN_GROUP', 1);

/**
 * Local: Operation in progress
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR__IN_PROGRESS', 1);

/**
 * Local: Previous operation in progress
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR__PREV_IN_PROGRESS', 1);

/**
 * Local: Existing subscription
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR__EXISTING_SUBSCRIPTION', 1);


/**
 * Local: Assign partitions
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR__ASSIGN_PARTITIONS', 1);

/**
 * Local: Revoke partitions
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR__REVOKE_PARTITIONS', 1);

/**
 * Local: Conflicting use
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR__CONFLICT', 1);

/**
 * Local: Erroneous state
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR__STATE', 1);


/**
 * Local: Unknown protocol
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR__UNKNOWN_PROTOCOL', 1);

/**
 * Local: Not implemented
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR__NOT_IMPLEMENTED', 1);

/**
 * Local: Authentication failure
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR__AUTHENTICATION', 1);

/**
 * Local: No offset stored
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR__NO_OFFSET', 1);

/**
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR__END', 1);

/**
 * Unknown broker error
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR_UNKNOWN', 1);

/**
 * Broker: Offset out of range
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR_OFFSET_OUT_OF_RANGE', 1);

/**
 * Broker: Invalid message
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR_INVALID_MSG', 1);

/**
 * Broker: Unknown topic or partition
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR_UNKNOWN_TOPIC_OR_PART', 1);

/**
 * Broker: Invalid message size
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR_INVALID_MSG_SIZE', 1);

/**
 * Broker: Leader not available
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR_LEADER_NOT_AVAILABLE', 1);

/**
 * Broker: Not leader for partition
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR_NOT_LEADER_FOR_PARTITION', 1);

/**
 * Broker: Request timed out
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR_REQUEST_TIMED_OUT', 1);

/**
 * Broker: Broker not available
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR_BROKER_NOT_AVAILABLE', 1);

/**
 * Broker: Replica not available
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR_REPLICA_NOT_AVAILABLE', 1);