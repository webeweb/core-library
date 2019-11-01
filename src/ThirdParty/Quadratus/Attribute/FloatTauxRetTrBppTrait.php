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
 * Taux ret tr bpp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTauxRetTrBppTrait {

    /**
     * Taux ret tr bpp.
     *
     * @var float
     */
    private $tauxRetTrBpp;

    /**
     * Get the taux ret tr bpp.
     *
     * @return float Returns the taux ret tr bpp.
     */
    public function getTauxRetTrBpp() {
        return $this->tauxRetTrBpp;
    }

    /**
     * Set the taux ret tr bpp.
     *
     * @param float $tauxRetTrBpp The taux ret tr bpp.
     */
    public function setTauxRetTrBpp($tauxRetTrBpp) {
        $this->tauxRetTrBpp = $tauxRetTrBpp;
        return $this;
    }
}
