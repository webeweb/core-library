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
 * Derniere periode annee trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolDernierePeriodeAnneeTrait {

    /**
     * Derniere periode annee.
     *
     * @var bool
     */
    private $dernierePeriodeAnnee;

    /**
     * Get the derniere periode annee.
     *
     * @return bool Returns the derniere periode annee.
     */
    public function getDernierePeriodeAnnee() {
        return $this->dernierePeriodeAnnee;
    }

    /**
     * Set the derniere periode annee.
     *
     * @param bool $dernierePeriodeAnnee The derniere periode annee.
     */
    public function setDernierePeriodeAnnee($dernierePeriodeAnnee) {
        $this->dernierePeriodeAnnee = $dernierePeriodeAnnee;
        return $this;
    }
}
