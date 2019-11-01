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
 * Nom ville insee lieu trav trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNomVilleInseeLieuTravTrait {

    /**
     * Nom ville insee lieu trav.
     *
     * @var string
     */
    private $nomVilleInseeLieuTrav;

    /**
     * Get the nom ville insee lieu trav.
     *
     * @return string Returns the nom ville insee lieu trav.
     */
    public function getNomVilleInseeLieuTrav() {
        return $this->nomVilleInseeLieuTrav;
    }

    /**
     * Set the nom ville insee lieu trav.
     *
     * @param string $nomVilleInseeLieuTrav The nom ville insee lieu trav.
     */
    public function setNomVilleInseeLieuTrav($nomVilleInseeLieuTrav) {
        $this->nomVilleInseeLieuTrav = $nomVilleInseeLieuTrav;
        return $this;
    }
}
