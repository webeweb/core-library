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
 * Fact btq trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFactBtqTrait {

    /**
     * Fact btq.
     *
     * @var string
     */
    private $factBtq;

    /**
     * Get the fact btq.
     *
     * @return string Returns the fact btq.
     */
    public function getFactBtq() {
        return $this->factBtq;
    }

    /**
     * Set the fact btq.
     *
     * @param string $factBtq The fact btq.
     */
    public function setFactBtq($factBtq) {
        $this->factBtq = $factBtq;
        return $this;
    }
}
