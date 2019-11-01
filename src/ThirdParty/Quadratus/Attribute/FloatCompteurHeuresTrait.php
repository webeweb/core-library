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
 * Compteur heures trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCompteurHeuresTrait {

    /**
     * Compteur heures.
     *
     * @var float
     */
    private $compteurHeures;

    /**
     * Get the compteur heures.
     *
     * @return float Returns the compteur heures.
     */
    public function getCompteurHeures() {
        return $this->compteurHeures;
    }

    /**
     * Set the compteur heures.
     *
     * @param float $compteurHeures The compteur heures.
     */
    public function setCompteurHeures($compteurHeures) {
        $this->compteurHeures = $compteurHeures;
        return $this;
    }
}
