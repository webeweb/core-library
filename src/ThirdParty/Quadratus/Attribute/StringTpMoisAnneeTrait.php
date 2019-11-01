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
 * Tp mois annee trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTpMoisAnneeTrait {

    /**
     * Tp mois annee.
     *
     * @var string
     */
    private $tpMoisAnnee;

    /**
     * Get the tp mois annee.
     *
     * @return string Returns the tp mois annee.
     */
    public function getTpMoisAnnee() {
        return $this->tpMoisAnnee;
    }

    /**
     * Set the tp mois annee.
     *
     * @param string $tpMoisAnnee The tp mois annee.
     */
    public function setTpMoisAnnee($tpMoisAnnee) {
        $this->tpMoisAnnee = $tpMoisAnnee;
        return $this;
    }
}
