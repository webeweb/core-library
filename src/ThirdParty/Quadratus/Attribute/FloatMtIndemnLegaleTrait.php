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
 * Mt indemn legale trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMtIndemnLegaleTrait {

    /**
     * Mt indemn legale.
     *
     * @var float
     */
    private $mtIndemnLegale;

    /**
     * Get the mt indemn legale.
     *
     * @return float Returns the mt indemn legale.
     */
    public function getMtIndemnLegale() {
        return $this->mtIndemnLegale;
    }

    /**
     * Set the mt indemn legale.
     *
     * @param float $mtIndemnLegale The mt indemn legale.
     */
    public function setMtIndemnLegale($mtIndemnLegale) {
        $this->mtIndemnLegale = $mtIndemnLegale;
        return $this;
    }
}
