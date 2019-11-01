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
 * Mt transport4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMtTransport4Trait {

    /**
     * Mt transport4.
     *
     * @var float
     */
    private $mtTransport4;

    /**
     * Get the mt transport4.
     *
     * @return float Returns the mt transport4.
     */
    public function getMtTransport4() {
        return $this->mtTransport4;
    }

    /**
     * Set the mt transport4.
     *
     * @param float $mtTransport4 The mt transport4.
     */
    public function setMtTransport4($mtTransport4) {
        $this->mtTransport4 = $mtTransport4;
        return $this;
    }
}
