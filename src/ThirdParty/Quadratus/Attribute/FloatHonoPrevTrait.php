<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Attribute;

/**
 * Hono prev trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatHonoPrevTrait {

    /**
     * Hono prev.
     *
     * @var float
     */
    private $honoPrev;

    /**
     * Get the hono prev.
     *
     * @return float Returns the hono prev.
     */
    public function getHonoPrev() {
        return $this->honoPrev;
    }

    /**
     * Set the hono prev.
     *
     * @param float $honoPrev The hono prev.
     */
    public function setHonoPrev($honoPrev) {
        $this->honoPrev = $honoPrev;
        return $this;
    }
}
