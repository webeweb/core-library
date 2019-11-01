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
 * Mt transport2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMtTransport2Trait {

    /**
     * Mt transport2.
     *
     * @var float
     */
    private $mtTransport2;

    /**
     * Get the mt transport2.
     *
     * @return float Returns the mt transport2.
     */
    public function getMtTransport2() {
        return $this->mtTransport2;
    }

    /**
     * Set the mt transport2.
     *
     * @param float $mtTransport2 The mt transport2.
     */
    public function setMtTransport2($mtTransport2) {
        $this->mtTransport2 = $mtTransport2;
        return $this;
    }
}
