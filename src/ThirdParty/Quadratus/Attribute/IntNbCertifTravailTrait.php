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
 * Nb certif travail trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbCertifTravailTrait {

    /**
     * Nb certif travail.
     *
     * @var int
     */
    private $nbCertifTravail;

    /**
     * Get the nb certif travail.
     *
     * @return int Returns the nb certif travail.
     */
    public function getNbCertifTravail() {
        return $this->nbCertifTravail;
    }

    /**
     * Set the nb certif travail.
     *
     * @param int $nbCertifTravail The nb certif travail.
     */
    public function setNbCertifTravail($nbCertifTravail) {
        $this->nbCertifTravail = $nbCertifTravail;
        return $this;
    }
}
