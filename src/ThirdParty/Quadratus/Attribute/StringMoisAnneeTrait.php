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
 * Mois annee trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMoisAnneeTrait {

    /**
     * Mois annee.
     *
     * @var string
     */
    private $moisAnnee;

    /**
     * Get the mois annee.
     *
     * @return string Returns the mois annee.
     */
    public function getMoisAnnee() {
        return $this->moisAnnee;
    }

    /**
     * Set the mois annee.
     *
     * @param string $moisAnnee The mois annee.
     */
    public function setMoisAnnee($moisAnnee) {
        $this->moisAnnee = $moisAnnee;
        return $this;
    }
}
