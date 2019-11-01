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
 * Rbt demande trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatRbtDemandeTrait {

    /**
     * Rbt demande.
     *
     * @var float
     */
    private $rbtDemande;

    /**
     * Get the rbt demande.
     *
     * @return float Returns the rbt demande.
     */
    public function getRbtDemande() {
        return $this->rbtDemande;
    }

    /**
     * Set the rbt demande.
     *
     * @param float $rbtDemande The rbt demande.
     */
    public function setRbtDemande($rbtDemande) {
        $this->rbtDemande = $rbtDemande;
        return $this;
    }
}
