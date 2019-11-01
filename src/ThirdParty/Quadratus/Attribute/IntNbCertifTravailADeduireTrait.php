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
 * Nb certif travail a deduire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbCertifTravailADeduireTrait {

    /**
     * Nb certif travail a deduire.
     *
     * @var int
     */
    private $nbCertifTravailADeduire;

    /**
     * Get the nb certif travail a deduire.
     *
     * @return int Returns the nb certif travail a deduire.
     */
    public function getNbCertifTravailADeduire() {
        return $this->nbCertifTravailADeduire;
    }

    /**
     * Set the nb certif travail a deduire.
     *
     * @param int $nbCertifTravailADeduire The nb certif travail a deduire.
     */
    public function setNbCertifTravailADeduire($nbCertifTravailADeduire) {
        $this->nbCertifTravailADeduire = $nbCertifTravailADeduire;
        return $this;
    }
}
