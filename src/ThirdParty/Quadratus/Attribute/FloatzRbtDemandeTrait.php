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
 * z rbt demande trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatzRbtDemandeTrait {

    /**
     * z rbt demande.
     *
     * @var float
     */
    private $zRbtDemande;

    /**
     * Get the z rbt demande.
     *
     * @return float Returns the z rbt demande.
     */
    public function getzRbtDemande() {
        return $this->zRbtDemande;
    }

    /**
     * Set the z rbt demande.
     *
     * @param float $zRbtDemande The z rbt demande.
     */
    public function setzRbtDemande($zRbtDemande) {
        $this->zRbtDemande = $zRbtDemande;
        return $this;
    }
}
