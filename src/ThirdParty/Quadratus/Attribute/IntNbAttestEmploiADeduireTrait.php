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
 * Nb attest emploi a deduire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbAttestEmploiADeduireTrait {

    /**
     * Nb attest emploi a deduire.
     *
     * @var int
     */
    private $nbAttestEmploiADeduire;

    /**
     * Get the nb attest emploi a deduire.
     *
     * @return int Returns the nb attest emploi a deduire.
     */
    public function getNbAttestEmploiADeduire() {
        return $this->nbAttestEmploiADeduire;
    }

    /**
     * Set the nb attest emploi a deduire.
     *
     * @param int $nbAttestEmploiADeduire The nb attest emploi a deduire.
     */
    public function setNbAttestEmploiADeduire($nbAttestEmploiADeduire) {
        $this->nbAttestEmploiADeduire = $nbAttestEmploiADeduire;
        return $this;
    }
}
