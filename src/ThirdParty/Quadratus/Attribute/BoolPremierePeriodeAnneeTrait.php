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
 * Premiere periode annee trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPremierePeriodeAnneeTrait {

    /**
     * Premiere periode annee.
     *
     * @var bool
     */
    private $premierePeriodeAnnee;

    /**
     * Get the premiere periode annee.
     *
     * @return bool Returns the premiere periode annee.
     */
    public function getPremierePeriodeAnnee() {
        return $this->premierePeriodeAnnee;
    }

    /**
     * Set the premiere periode annee.
     *
     * @param bool $premierePeriodeAnnee The premiere periode annee.
     */
    public function setPremierePeriodeAnnee($premierePeriodeAnnee) {
        $this->premierePeriodeAnnee = $premierePeriodeAnnee;
        return $this;
    }
}
