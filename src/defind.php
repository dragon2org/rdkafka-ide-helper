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
define('RD_KAFKA_OFFSET_BEGINNING', -2);

/**
 * Start consuming from end of kafka partition queue: next msg.
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_OFFSET_END', -1);

/**
 * Start consuming from offset retrieved from offset store.
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_OFFSET_STORED', -1000);

/**
 * The unassigned partition is used by the producer API for messages that should be partitioned using the configured or default partitioner.
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_PARTITION_UA', -1);

/**
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_PRODUCER', 0);

/**
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_VERSION', 16777471);

/**
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR__BEGIN', -200);

/**
 * Local: Bad message format
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR__BAD_MSG', -199);

/**
 * Local: Invalid compressed data
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR__BAD_COMPRESSION', -198);

/**
 * Local: Broker handle destroyed
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR__DESTROY', -197);

/**
 * Local: Communication failure with broker
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR__FAIL', -196);

/**
 * Local: Broker transport failure
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR__TRANSPORT', -195);

/**
 * Local: Critical system resource failure
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR__CRIT_SYS_RESOURCE', -194);

/**
 * Local: Host resolution failure
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR__RESOLVE', -193);
/**
 * Local: Message timed out
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR__MSG_TIMED_OUT', -192);

/**
 * Broker: No more messages
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR__PARTITION_EOF', -191);

/**
 * Local: Unknown partition
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR__UNKNOWN_PARTITION', -190);

/**
 * Local: File or filesystem error
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR__FS', -189);

/**
 * Local: Unknown topic
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR__UNKNOWN_TOPIC', -188);

/**
 * Local: All broker connections are down
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR__ALL_BROKERS_DOWN', -187);

/**
 * Local: Invalid argument or configuration
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR__INVALID_ARG', -186);

/**
 * Local: Timed out
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR__TIMED_OUT', -185);

/**
 * Local: Queue full
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR__QUEUE_FULL', -184);

/**
 * Local: ISR count insufficient
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR__ISR_INSUFF', -183);

/**
 * Local: Broker node update
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR__NODE_UPDATE', -182);

/**
 * Local: SSL error
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR__SSL', -181);

/**
 * Local: Waiting for coordinator
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR__WAIT_COORD', -180);

/**
 * Local: Unknown group
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR__UNKNOWN_GROUP', -179);

/**
 * Local: Operation in progress
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR__IN_PROGRESS', -178);

/**
 * Local: Previous operation in progress
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR__PREV_IN_PROGRESS', -177);

/**
 * Local: Existing subscription
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR__EXISTING_SUBSCRIPTION', -176);


/**
 * Local: Assign partitions
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR__ASSIGN_PARTITIONS', -175);

/**
 * Local: Revoke partitions
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR__REVOKE_PARTITIONS', -174);

/**
 * Local: Conflicting use
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR__CONFLICT', -173);

/**
 * Local: Erroneous state
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR__STATE', -171);


/**
 * Local: Unknown protocol
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR__UNKNOWN_PROTOCOL', -170);

/**
 * Local: Not implemented
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR__NOT_IMPLEMENTED', -169);

/**
 * Local: Authentication failure
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR__AUTHENTICATION', 1);

/**
 * Local: No offset stored
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR__NO_OFFSET', -168);

/**
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR__END', -100);

/**
 * Unknown broker error
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR_UNKNOWN', -1);

/**
 * Broker: Offset out of range
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR_OFFSET_OUT_OF_RANGE', 1);

/**
 * Broker: Invalid message
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR_INVALID_MSG', 2);

/**
 * Broker: Unknown topic or partition
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR_UNKNOWN_TOPIC_OR_PART', 3);

/**
 * Broker: Invalid message size
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR_INVALID_MSG_SIZE', 4);

/**
 * Broker: Leader not available
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR_LEADER_NOT_AVAILABLE', 5);

/**
 * Broker: Not leader for partition
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR_NOT_LEADER_FOR_PARTITION', 6);

/**
 * Broker: Request timed out
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR_REQUEST_TIMED_OUT', 7);

/**
 * Broker: Broker not available
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR_BROKER_NOT_AVAILABLE', 8);

/**
 * Broker: Replica not available
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR_REPLICA_NOT_AVAILABLE', 9);

/**
 * Broker: Message size too large
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR_MSG_SIZE_TOO_LARGE', 10);

/**
 * Broker: StaleControllerEpochCode
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR_STALE_CTRL_EPOCH', 11);

/**
 * Broker: Offset metadata string too large
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR_OFFSET_METADATA_TOO_LARGE', 12);

/**
 * Broker: Broker disconnected before response received
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR_NETWORK_EXCEPTION', 13);

/**
 * Broker: Group coordinator load in progress
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR_GROUP_LOAD_IN_PROGRESS', 14);

/**
 * Broker: Group coordinator not available
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR_GROUP_COORDINATOR_NOT_AVAILABLE', 15);

/**
 * Broker: Not coordinator for group
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR_NOT_COORDINATOR_FOR_GROUP', 16);

/**
 * Broker: Invalid topic
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR_TOPIC_EXCEPTION', 17);

/**
 * Broker: Message batch larger than configured server segment size
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR_RECORD_LIST_TOO_LARGE', 18);

/**
 * Broker: Not enough in-sync replicas
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR_NOT_ENOUGH_REPLICAS', 19);

/**
 * Broker: Message(s) written to insufficient number of in-sync replicas
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR_NOT_ENOUGH_REPLICAS_AFTER_APPEND', 20);


/**
 * Broker: Invalid required acks value
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR_INVALID_REQUIRED_ACKS', 21);

/**
 * Broker: Specified group generation id is not valid
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR_ILLEGAL_GENERATION', 22);

/**
 * Broker: Inconsistent group protocol
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR_INCONSISTENT_GROUP_PROTOCOL', 23);

/**
 * Broker: Invalid group.id
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR_INVALID_GROUP_ID', 24);

/**
 * Broker: Unknown member
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR_UNKNOWN_MEMBER_ID', 25);

/**
 * Broker: Invalid session timeout
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR_INVALID_SESSION_TIMEOUT', 26);

/**
 * Broker: Group rebalance in progress
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR_REBALANCE_IN_PROGRESS', 27);

/**
 * Broker: Commit offset data size is not valid
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR_INVALID_COMMIT_OFFSET_SIZE', 28);

/**
 * Broker: Group authorization failed
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR_GROUP_AUTHORIZATION_FAILED', 30);

/**
 * Broker: Cluster authorization failed
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_RESP_ERR_CLUSTER_AUTHORIZATION_FAILED', 31);

/**
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_CONF_UNKNOWN', -2);

/**
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_CONF_INVALID', 1);

/**
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_CONF_OK', 0);

/**
 * The random partitioner. This was the default partitioner in librdkafka 0.8. Assigns partition randomly.
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_MSG_PARTITIONER_RANDOM', 2);

/**
 * The consistent partitioner. Uses consistent hashing to map identical keys onto identical partitions. Uses CRC32 as hashing function. Messages with no key or empty key are always assigned to the same partition.
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_MSG_PARTITIONER_CONSISTENT', 3);

/**
 * The print logger. Prints messages to stderr.
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_LOG_PRINT', 100);

/**
 * The syslog logger. Sends messages to syslog.
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_LOG_SYSLOG', 101);

/**
 * The syslog-print partitioner. Sends messages to syslog and prints them to stderr.
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka.constants.html
 */
define('RD_KAFKA_LOG_SYSLOG_PRINT', 102);
