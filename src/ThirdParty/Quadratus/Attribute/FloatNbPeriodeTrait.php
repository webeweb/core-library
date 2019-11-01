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
 * Nb periode trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbPeriodeTrait {

    /**
     * Nb periode.
     *
     * @var float
     */
    private $nbPeriode;

    /**
     * Get the nb periode.
     *
     * @return float Returns the nb periode.
     */
    public function getNbPeriode() {
        return $this->nbPeriode;
    }

    /**
     * Set the nb periode.
     *
     * @param float $nbPeriode The nb periode.
     */
    public function setNbPeriode($nbPeriode) {
        $this->nbPeriode = $nbPeriode;
        return $this;
    }
}
