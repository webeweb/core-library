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
 * Ha px achat brut trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatHaPxAchatBrutTrait {

    /**
     * Ha px achat brut.
     *
     * @var float
     */
    private $haPxAchatBrut;

    /**
     * Get the ha px achat brut.
     *
     * @return float Returns the ha px achat brut.
     */
    public function getHaPxAchatBrut() {
        return $this->haPxAchatBrut;
    }

    /**
     * Set the ha px achat brut.
     *
     * @param float $haPxAchatBrut The ha px achat brut.
     */
    public function setHaPxAchatBrut($haPxAchatBrut) {
        $this->haPxAchatBrut = $haPxAchatBrut;
        return $this;
    }
}
