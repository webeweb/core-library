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
 * Tva moyen paiement trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntTvaMoyenPaiementTrait {

    /**
     * Tva moyen paiement.
     *
     * @var int
     */
    private $tvaMoyenPaiement;

    /**
     * Get the tva moyen paiement.
     *
     * @return int Returns the tva moyen paiement.
     */
    public function getTvaMoyenPaiement() {
        return $this->tvaMoyenPaiement;
    }

    /**
     * Set the tva moyen paiement.
     *
     * @param int $tvaMoyenPaiement The tva moyen paiement.
     */
    public function setTvaMoyenPaiement($tvaMoyenPaiement) {
        $this->tvaMoyenPaiement = $tvaMoyenPaiement;
        return $this;
    }
}
