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
 * Montant ducs annuelle trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontantDucsAnnuelleTrait {

    /**
     * Montant ducs annuelle.
     *
     * @var float
     */
    private $montantDucsAnnuelle;

    /**
     * Get the montant ducs annuelle.
     *
     * @return float Returns the montant ducs annuelle.
     */
    public function getMontantDucsAnnuelle() {
        return $this->montantDucsAnnuelle;
    }

    /**
     * Set the montant ducs annuelle.
     *
     * @param float $montantDucsAnnuelle The montant ducs annuelle.
     */
    public function setMontantDucsAnnuelle($montantDucsAnnuelle) {
        $this->montantDucsAnnuelle = $montantDucsAnnuelle;
        return $this;
    }
}
