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
 * Nom voie lieu trav trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNomVoieLieuTravTrait {

    /**
     * Nom voie lieu trav.
     *
     * @var string
     */
    private $nomVoieLieuTrav;

    /**
     * Get the nom voie lieu trav.
     *
     * @return string Returns the nom voie lieu trav.
     */
    public function getNomVoieLieuTrav() {
        return $this->nomVoieLieuTrav;
    }

    /**
     * Set the nom voie lieu trav.
     *
     * @param string $nomVoieLieuTrav The nom voie lieu trav.
     */
    public function setNomVoieLieuTrav($nomVoieLieuTrav) {
        $this->nomVoieLieuTrav = $nomVoieLieuTrav;
        return $this;
    }
}
