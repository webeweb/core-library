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
 * Mt idemn transac trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMtIdemnTransacTrait {

    /**
     * Mt idemn transac.
     *
     * @var float
     */
    private $mtIdemnTransac;

    /**
     * Get the mt idemn transac.
     *
     * @return float Returns the mt idemn transac.
     */
    public function getMtIdemnTransac() {
        return $this->mtIdemnTransac;
    }

    /**
     * Set the mt idemn transac.
     *
     * @param float $mtIdemnTransac The mt idemn transac.
     */
    public function setMtIdemnTransac($mtIdemnTransac) {
        $this->mtIdemnTransac = $mtIdemnTransac;
        return $this;
    }
}
