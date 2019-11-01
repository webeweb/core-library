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
 * Motif non paiement trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMotifNonPaiementTrait {

    /**
     * Motif non paiement.
     *
     * @var string
     */
    private $motifNonPaiement;

    /**
     * Get the motif non paiement.
     *
     * @return string Returns the motif non paiement.
     */
    public function getMotifNonPaiement() {
        return $this->motifNonPaiement;
    }

    /**
     * Set the motif non paiement.
     *
     * @param string $motifNonPaiement The motif non paiement.
     */
    public function setMotifNonPaiement($motifNonPaiement) {
        $this->motifNonPaiement = $motifNonPaiement;
        return $this;
    }
}
