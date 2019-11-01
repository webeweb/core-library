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
 * Mt transport5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMtTransport5Trait {

    /**
     * Mt transport5.
     *
     * @var float
     */
    private $mtTransport5;

    /**
     * Get the mt transport5.
     *
     * @return float Returns the mt transport5.
     */
    public function getMtTransport5() {
        return $this->mtTransport5;
    }

    /**
     * Set the mt transport5.
     *
     * @param float $mtTransport5 The mt transport5.
     */
    public function setMtTransport5($mtTransport5) {
        $this->mtTransport5 = $mtTransport5;
        return $this;
    }
}
