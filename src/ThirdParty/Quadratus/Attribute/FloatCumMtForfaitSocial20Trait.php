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
 * Cum mt forfait social20 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumMtForfaitSocial20Trait {

    /**
     * Cum mt forfait social20.
     *
     * @var float
     */
    private $cumMtForfaitSocial20;

    /**
     * Get the cum mt forfait social20.
     *
     * @return float Returns the cum mt forfait social20.
     */
    public function getCumMtForfaitSocial20() {
        return $this->cumMtForfaitSocial20;
    }

    /**
     * Set the cum mt forfait social20.
     *
     * @param float $cumMtForfaitSocial20 The cum mt forfait social20.
     */
    public function setCumMtForfaitSocial20($cumMtForfaitSocial20) {
        $this->cumMtForfaitSocial20 = $cumMtForfaitSocial20;
        return $this;
    }
}
