<?php
/**
 * HigherOrderWhenProxy
 *
 * @version 1.0
 * @author herry<yuandeng@aliyun.com>
 * @copyright © 2020 MuCTS.com All Rights Reserved.
 */

namespace MuCTS\Support;

use MuCTS\Support\Interfaces\Enumerable;

/**
 * @mixin Enumerable
 */
class HigherOrderWhenProxy
{
    /**
     * The collection being operated on.
     *
     * @var Enumerable
     */
    protected Enumerable $collection;

    /**
     * The condition for proxying.
     *
     * @var bool
     */
    protected bool $condition;

    /**
     * Create a new proxy instance.
     *
     * @param Enumerable $collection
     * @param bool $condition
     * @return void
     */
    public function __construct(Enumerable $collection, $condition)
    {
        $this->condition = $condition;
        $this->collection = $collection;
    }

    /**
     * Proxy accessing an attribute onto the collection.
     *
     * @param string $key
     * @return mixed
     */
    public function __get($key)
    {
        return $this->condition
            ? $this->collection->{$key}
            : $this->collection;
    }

    /**
     * Proxy a method call onto the collection.
     *
     * @param string $method
     * @param array $parameters
     * @return mixed
     */
    public function __call($method, $parameters)
    {
        return $this->condition
            ? $this->collection->{$method}(...$parameters)
            : $this->collection;
    }
}