<?php
/**
 * This file is part of the mucts.com.
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 *
 * @version 1.0
 * @author herry<yuandeng@aliyun.com>
 * @copyright © 2020 MuCTS.com All Rights Reserved.
 */

namespace MuCTS\Support\Interfaces;


use Closure;

interface ContextualBindingBuilder
{
    /**
     * Define the abstract target that depends on the context.
     *
     * @param  string  $abstract
     * @return static
     */
    public function needs($abstract);

    /**
     * Define the implementation for the contextual binding.
     *
     * @param  Closure|string  $implementation
     * @return void
     */
    public function give($implementation);
}