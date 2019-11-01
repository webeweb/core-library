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
 * Franco port2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatFrancoPort2Trait {

    /**
     * Franco port2.
     *
     * @var float
     */
    private $francoPort2;

    /**
     * Get the franco port2.
     *
     * @return float Returns the franco port2.
     */
    public function getFrancoPort2() {
        return $this->francoPort2;
    }

    /**
     * Set the franco port2.
     *
     * @param float $francoPort2 The franco port2.
     */
    public function setFrancoPort2($francoPort2) {
        $this->francoPort2 = $francoPort2;
        return $this;
    }
}
