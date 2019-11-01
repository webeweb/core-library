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
 * Nom ville lieu trav trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNomVilleLieuTravTrait {

    /**
     * Nom ville lieu trav.
     *
     * @var string
     */
    private $nomVilleLieuTrav;

    /**
     * Get the nom ville lieu trav.
     *
     * @return string Returns the nom ville lieu trav.
     */
    public function getNomVilleLieuTrav() {
        return $this->nomVilleLieuTrav;
    }

    /**
     * Set the nom ville lieu trav.
     *
     * @param string $nomVilleLieuTrav The nom ville lieu trav.
     */
    public function setNomVilleLieuTrav($nomVilleLieuTrav) {
        $this->nomVilleLieuTrav = $nomVilleLieuTrav;
        return $this;
    }
}
