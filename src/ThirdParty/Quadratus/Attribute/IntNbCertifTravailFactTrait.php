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
 * Nb certif travail fact trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbCertifTravailFactTrait {

    /**
     * Nb certif travail fact.
     *
     * @var int
     */
    private $nbCertifTravailFact;

    /**
     * Get the nb certif travail fact.
     *
     * @return int Returns the nb certif travail fact.
     */
    public function getNbCertifTravailFact() {
        return $this->nbCertifTravailFact;
    }

    /**
     * Set the nb certif travail fact.
     *
     * @param int $nbCertifTravailFact The nb certif travail fact.
     */
    public function setNbCertifTravailFact($nbCertifTravailFact) {
        $this->nbCertifTravailFact = $nbCertifTravailFact;
        return $this;
    }
}
