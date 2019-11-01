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
 * Nb attest emploi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbAttestEmploiTrait {

    /**
     * Nb attest emploi.
     *
     * @var int
     */
    private $nbAttestEmploi;

    /**
     * Get the nb attest emploi.
     *
     * @return int Returns the nb attest emploi.
     */
    public function getNbAttestEmploi() {
        return $this->nbAttestEmploi;
    }

    /**
     * Set the nb attest emploi.
     *
     * @param int $nbAttestEmploi The nb attest emploi.
     */
    public function setNbAttestEmploi($nbAttestEmploi) {
        $this->nbAttestEmploi = $nbAttestEmploi;
        return $this;
    }
}
