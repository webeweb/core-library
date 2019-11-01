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
 * Qualite paiement trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringQualitePaiementTrait {

    /**
     * Qualite paiement.
     *
     * @var string
     */
    private $qualitePaiement;

    /**
     * Get the qualite paiement.
     *
     * @return string Returns the qualite paiement.
     */
    public function getQualitePaiement() {
        return $this->qualitePaiement;
    }

    /**
     * Set the qualite paiement.
     *
     * @param string $qualitePaiement The qualite paiement.
     */
    public function setQualitePaiement($qualitePaiement) {
        $this->qualitePaiement = $qualitePaiement;
        return $this;
    }
}
