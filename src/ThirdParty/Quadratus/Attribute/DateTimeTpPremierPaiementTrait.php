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

use DateTime;

/**
 * Tp premier paiement trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeTpPremierPaiementTrait {

    /**
     * Tp premier paiement.
     *
     * @var DateTime|null
     */
    private $tpPremierPaiement;

    /**
     * Get the tp premier paiement.
     *
     * @return DateTime|null Returns the tp premier paiement.
     */
    public function getTpPremierPaiement() {
        return $this->tpPremierPaiement;
    }

    /**
     * Set the tp premier paiement.
     *
     * @param DateTime|null $tpPremierPaiement The tp premier paiement.
     */
    public function setTpPremierPaiement(DateTime $tpPremierPaiement = null) {
        $this->tpPremierPaiement = $tpPremierPaiement;
        return $this;
    }
}
