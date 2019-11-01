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
 * Nb annexes editees a deduire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbAnnexesEditeesADeduireTrait {

    /**
     * Nb annexes editees a deduire.
     *
     * @var int
     */
    private $nbAnnexesEditeesADeduire;

    /**
     * Get the nb annexes editees a deduire.
     *
     * @return int Returns the nb annexes editees a deduire.
     */
    public function getNbAnnexesEditeesADeduire() {
        return $this->nbAnnexesEditeesADeduire;
    }

    /**
     * Set the nb annexes editees a deduire.
     *
     * @param int $nbAnnexesEditeesADeduire The nb annexes editees a deduire.
     */
    public function setNbAnnexesEditeesADeduire($nbAnnexesEditeesADeduire) {
        $this->nbAnnexesEditeesADeduire = $nbAnnexesEditeesADeduire;
        return $this;
    }
}
