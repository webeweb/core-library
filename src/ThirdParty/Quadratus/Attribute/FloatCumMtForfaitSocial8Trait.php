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
 * Cum mt forfait social8 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumMtForfaitSocial8Trait {

    /**
     * Cum mt forfait social8.
     *
     * @var float
     */
    private $cumMtForfaitSocial8;

    /**
     * Get the cum mt forfait social8.
     *
     * @return float Returns the cum mt forfait social8.
     */
    public function getCumMtForfaitSocial8() {
        return $this->cumMtForfaitSocial8;
    }

    /**
     * Set the cum mt forfait social8.
     *
     * @param float $cumMtForfaitSocial8 The cum mt forfait social8.
     */
    public function setCumMtForfaitSocial8($cumMtForfaitSocial8) {
        $this->cumMtForfaitSocial8 = $cumMtForfaitSocial8;
        return $this;
    }
}
