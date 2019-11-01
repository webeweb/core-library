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
 * Moyen paiement trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMoyenPaiementTrait {

    /**
     * Moyen paiement.
     *
     * @var string
     */
    private $moyenPaiement;

    /**
     * Get the moyen paiement.
     *
     * @return string Returns the moyen paiement.
     */
    public function getMoyenPaiement() {
        return $this->moyenPaiement;
    }

    /**
     * Set the moyen paiement.
     *
     * @param string $moyenPaiement The moyen paiement.
     */
    public function setMoyenPaiement($moyenPaiement) {
        $this->moyenPaiement = $moyenPaiement;
        return $this;
    }
}
