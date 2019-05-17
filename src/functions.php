<?php

/**
 * rdkafka 错误代码转换成字符串
 * Convert a rdkafka error code to a string
 * @param int $err Error code
 * @return string error as a string.
 */
function rd_kafka_err2str(int $err): string
{

}

/**
 * Converts the system errno errnox to a kafka error code
 *
 * @param int $errnox system errno
 * @return int kafka error code as an integer. @see https://arnaud-lb.github.io/php-rdkafka/phpdoc/language.types.integer.html
 */
function rd_kafka_errno2err(int $errnox): int
{

}

/**
 * Get the system errno
 *
 * @return int system errno as an integer. @see https://arnaud-lb.github.io/php-rdkafka/phpdoc/language.types.integer.html
 */
function rd_kafka_errno(): int
{

}

/**
 * Kafka offset relative to tail
 *
 * Returns a special offset value that can be used to start consuming cnt messages
 * before the tail of the topic.
 *
 * @param int $cnt
 * @return int Returns the special offset as an integer. @see https://arnaud-lb.github.io/php-rdkafka/phpdoc/language.types.integer.html
 */
function rd_kafka_offset_tail(int $cnt): int
{

}



