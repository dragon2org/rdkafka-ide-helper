<?php


namespace RdKafka;


class Conf
{
    /**
     * Dump the configuration
     * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka-conf.dump.html
     * @return void
     * @since 0.9.1
     */
    public function dump(): array { }

    /**
     * Set configuration
     * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka-conf.set.html
     * @return void
     * @since 0.9.1
     */
    public function set(string $name, string $value): void { }

    /**
     * Set consume callback
     * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka-conf.setconsumecb.html
     * @params callable $callback
     * @return void
     * @since 0.9.1
     */
    public function setConsumeCb(callable $callback) : void { }

    /**
     * Set default topic configuration
     *
     * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka-conf.setconsumecb.html
     * @param RdKafka\TopicConf $topic_conf
     * @return void
     * @since 0.9.1
     */
    public function setDefaultTopicConf( RdKafka\TopicConf $topic_conf ) : void { }

    /**
     * Set delivery report callback
     * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka-conf.setdrmsgcb.html
     * @params callable $callback
     * @return void
     * @since 0.9.1
     */
    public function setDrMsgCb(callable $callback) :void { }

    /**
     * Set error callback
     * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka-conf.setdrmsgcb.html
     * @params callable $callback
     * @return void
     * @since 0.9.1
     */
    public function setErrorCb(callable $callback) :void { }

    /**
     * Set offset commit callback
     * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka-conf.setoffsetcommitcb.html
     * @params callable $callback
     * @return void
     * @since 0.9.1
     */
    public function setOffsetCommitCb(callable $callback) :void { }

    /**
     * Set rebalance callback
     * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka-conf.setrebalancecb.html
     * @params callable $callback
     * @return void
     * @since 0.9.1
     */
    public function setRebalanceCb(callable $callback) :void { }

    /**
     * Sets the statistics report callback
     * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka-conf.setstatscb.html
     * @params callable $callback
     * @return void
     * @since 0.9.1
     */
    public function setStatsCb(callable $callback) :void { }

}