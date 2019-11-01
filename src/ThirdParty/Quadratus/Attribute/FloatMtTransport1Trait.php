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
 * Mt transport1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMtTransport1Trait {

    /**
     * Mt transport1.
     *
     * @var float
     */
    private $mtTransport1;

    /**
     * Get the mt transport1.
     *
     * @return float Returns the mt transport1.
     */
    public function getMtTransport1() {
        return $this->mtTransport1;
    }

    /**
     * Set the mt transport1.
     *
     * @param float $mtTransport1 The mt transport1.
     */
    public function setMtTransport1($mtTransport1) {
        $this->mtTransport1 = $mtTransport1;
        return $this;
    }
}
