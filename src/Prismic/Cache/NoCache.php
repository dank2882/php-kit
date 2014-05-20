<?php

/*
 * This file is part of the Prismic PHP SDK
 *
 * Copyright 2013 Zengularity (http://www.zengularity.com).
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prismic\Cache;

class NoCache implements CacheInterface {

    public function get($key) {
        return false;
    }

    public function set($key, $value, $ttl = null) {
        return false;
    }

    public function delete($key) {
        return false;
    }

    public function clear() {
        return false;
    }
}