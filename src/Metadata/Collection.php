<?php


namespace RdKafka\Metadata;


class Collection
{
    /**
     * Count elements
     * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka-metadata-collection.count.html
     * @return int Returns the number of elements as integer @see https://arnaud-lb.github.io/php-rdkafka/phpdoc/language.types.integer.html
     * @since 0.9.1
     */
    public function count(): int { }

    /**
     * Gets the current value
     * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka-metadata-collection.current.html
     * @return void
     * @since 0.9.1
     */
    public function current() { }

    /**
     * Get the current key
     * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka-metadata-collection.key.html
     * @return void
     * @since 0.9.1
     */
    public function key() { }

    /**
     * Moves to the next element
     * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka-metadata-collection.next.html
     * @return void
     * @since 0.9.1
     */
    public function next() {}

    /**
     * Rewinds the Iterator
     * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka-metadata-collection.rewind.html
     * @return void
     * @since 0.9.1
     */
    public function rewind() {}

    /**
     * Checks if current position is valid
     * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka-metadata-collection.valid.html
     * @return void
     * @since 0.9.1
     */
    public function valid() {}
}