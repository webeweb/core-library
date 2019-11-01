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
 * Duree annuelle trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatDureeAnnuelleTrait {

    /**
     * Duree annuelle.
     *
     * @var float
     */
    private $dureeAnnuelle;

    /**
     * Get the duree annuelle.
     *
     * @return float Returns the duree annuelle.
     */
    public function getDureeAnnuelle() {
        return $this->dureeAnnuelle;
    }

    /**
     * Set the duree annuelle.
     *
     * @param float $dureeAnnuelle The duree annuelle.
     */
    public function setDureeAnnuelle($dureeAnnuelle) {
        $this->dureeAnnuelle = $dureeAnnuelle;
        return $this;
    }
}
