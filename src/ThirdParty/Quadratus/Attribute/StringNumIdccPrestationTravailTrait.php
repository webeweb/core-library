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
 * Num idcc prestation travail trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumIdccPrestationTravailTrait {

    /**
     * Num idcc prestation travail.
     *
     * @var string
     */
    private $numIdccPrestationTravail;

    /**
     * Get the num idcc prestation travail.
     *
     * @return string Returns the num idcc prestation travail.
     */
    public function getNumIdccPrestationTravail() {
        return $this->numIdccPrestationTravail;
    }

    /**
     * Set the num idcc prestation travail.
     *
     * @param string $numIdccPrestationTravail The num idcc prestation travail.
     */
    public function setNumIdccPrestationTravail($numIdccPrestationTravail) {
        $this->numIdccPrestationTravail = $numIdccPrestationTravail;
        return $this;
    }
}
