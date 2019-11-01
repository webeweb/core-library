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
 * Coeff sur px achat brut trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCoeffSurPxAchatBrutTrait {

    /**
     * Coeff sur px achat brut.
     *
     * @var bool
     */
    private $coeffSurPxAchatBrut;

    /**
     * Get the coeff sur px achat brut.
     *
     * @return bool Returns the coeff sur px achat brut.
     */
    public function getCoeffSurPxAchatBrut() {
        return $this->coeffSurPxAchatBrut;
    }

    /**
     * Set the coeff sur px achat brut.
     *
     * @param bool $coeffSurPxAchatBrut The coeff sur px achat brut.
     */
    public function setCoeffSurPxAchatBrut($coeffSurPxAchatBrut) {
        $this->coeffSurPxAchatBrut = $coeffSurPxAchatBrut;
        return $this;
    }
}
