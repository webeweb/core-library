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
 * Num edit lettre paiement trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNumEditLettrePaiementTrait {

    /**
     * Num edit lettre paiement.
     *
     * @var int
     */
    private $numEditLettrePaiement;

    /**
     * Get the num edit lettre paiement.
     *
     * @return int Returns the num edit lettre paiement.
     */
    public function getNumEditLettrePaiement() {
        return $this->numEditLettrePaiement;
    }

    /**
     * Set the num edit lettre paiement.
     *
     * @param int $numEditLettrePaiement The num edit lettre paiement.
     */
    public function setNumEditLettrePaiement($numEditLettrePaiement) {
        $this->numEditLettrePaiement = $numEditLettrePaiement;
        return $this;
    }
}
