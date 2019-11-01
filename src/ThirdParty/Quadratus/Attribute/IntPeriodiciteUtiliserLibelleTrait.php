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
 * Periodicite utiliser libelle trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntPeriodiciteUtiliserLibelleTrait {

    /**
     * Periodicite utiliser libelle.
     *
     * @var int
     */
    private $periodiciteUtiliserLibelle;

    /**
     * Get the periodicite utiliser libelle.
     *
     * @return int Returns the periodicite utiliser libelle.
     */
    public function getPeriodiciteUtiliserLibelle() {
        return $this->periodiciteUtiliserLibelle;
    }

    /**
     * Set the periodicite utiliser libelle.
     *
     * @param int $periodiciteUtiliserLibelle The periodicite utiliser libelle.
     */
    public function setPeriodiciteUtiliserLibelle($periodiciteUtiliserLibelle) {
        $this->periodiciteUtiliserLibelle = $periodiciteUtiliserLibelle;
        return $this;
    }
}
