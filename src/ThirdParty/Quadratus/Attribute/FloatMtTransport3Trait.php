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
 * Mt transport3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMtTransport3Trait {

    /**
     * Mt transport3.
     *
     * @var float
     */
    private $mtTransport3;

    /**
     * Get the mt transport3.
     *
     * @return float Returns the mt transport3.
     */
    public function getMtTransport3() {
        return $this->mtTransport3;
    }

    /**
     * Set the mt transport3.
     *
     * @param float $mtTransport3 The mt transport3.
     */
    public function setMtTransport3($mtTransport3) {
        $this->mtTransport3 = $mtTransport3;
        return $this;
    }
}
