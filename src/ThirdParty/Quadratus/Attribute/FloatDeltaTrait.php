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
 * Delta trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatDeltaTrait {

    /**
     * Delta.
     *
     * @var float
     */
    private $delta;

    /**
     * Get the delta.
     *
     * @return float Returns the delta.
     */
    public function getDelta() {
        return $this->delta;
    }

    /**
     * Set the delta.
     *
     * @param float $delta The delta.
     */
    public function setDelta($delta) {
        $this->delta = $delta;
        return $this;
    }
}
