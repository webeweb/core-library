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
 * Raison mv paiement trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRaisonMvPaiementTrait {

    /**
     * Raison mv paiement.
     *
     * @var string
     */
    private $raisonMvPaiement;

    /**
     * Get the raison mv paiement.
     *
     * @return string Returns the raison mv paiement.
     */
    public function getRaisonMvPaiement() {
        return $this->raisonMvPaiement;
    }

    /**
     * Set the raison mv paiement.
     *
     * @param string $raisonMvPaiement The raison mv paiement.
     */
    public function setRaisonMvPaiement($raisonMvPaiement) {
        $this->raisonMvPaiement = $raisonMvPaiement;
        return $this;
    }
}
