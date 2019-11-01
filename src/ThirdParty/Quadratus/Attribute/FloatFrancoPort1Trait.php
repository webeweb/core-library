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
 * Franco port1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatFrancoPort1Trait {

    /**
     * Franco port1.
     *
     * @var float
     */
    private $francoPort1;

    /**
     * Get the franco port1.
     *
     * @return float Returns the franco port1.
     */
    public function getFrancoPort1() {
        return $this->francoPort1;
    }

    /**
     * Set the franco port1.
     *
     * @param float $francoPort1 The franco port1.
     */
    public function setFrancoPort1($francoPort1) {
        $this->francoPort1 = $francoPort1;
        return $this;
    }
}
