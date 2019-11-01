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
 * Px achat brut trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPxAchatBrutTrait {

    /**
     * Px achat brut.
     *
     * @var float
     */
    private $pxAchatBrut;

    /**
     * Get the px achat brut.
     *
     * @return float Returns the px achat brut.
     */
    public function getPxAchatBrut() {
        return $this->pxAchatBrut;
    }

    /**
     * Set the px achat brut.
     *
     * @param float $pxAchatBrut The px achat brut.
     */
    public function setPxAchatBrut($pxAchatBrut) {
        $this->pxAchatBrut = $pxAchatBrut;
        return $this;
    }
}
