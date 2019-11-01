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
 * Nb attest emploi fact trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbAttestEmploiFactTrait {

    /**
     * Nb attest emploi fact.
     *
     * @var int
     */
    private $nbAttestEmploiFact;

    /**
     * Get the nb attest emploi fact.
     *
     * @return int Returns the nb attest emploi fact.
     */
    public function getNbAttestEmploiFact() {
        return $this->nbAttestEmploiFact;
    }

    /**
     * Set the nb attest emploi fact.
     *
     * @param int $nbAttestEmploiFact The nb attest emploi fact.
     */
    public function setNbAttestEmploiFact($nbAttestEmploiFact) {
        $this->nbAttestEmploiFact = $nbAttestEmploiFact;
        return $this;
    }
}
