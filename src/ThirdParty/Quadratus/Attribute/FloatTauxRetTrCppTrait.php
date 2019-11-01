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
 * Taux ret tr cpp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTauxRetTrCppTrait {

    /**
     * Taux ret tr cpp.
     *
     * @var float
     */
    private $tauxRetTrCpp;

    /**
     * Get the taux ret tr cpp.
     *
     * @return float Returns the taux ret tr cpp.
     */
    public function getTauxRetTrCpp() {
        return $this->tauxRetTrCpp;
    }

    /**
     * Set the taux ret tr cpp.
     *
     * @param float $tauxRetTrCpp The taux ret tr cpp.
     */
    public function setTauxRetTrCpp($tauxRetTrCpp) {
        $this->tauxRetTrCpp = $tauxRetTrCpp;
        return $this;
    }
}
