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
 * Nb tds realisees a deduire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbTdsRealiseesADeduireTrait {

    /**
     * Nb tds realisees a deduire.
     *
     * @var int
     */
    private $nbTdsRealiseesADeduire;

    /**
     * Get the nb tds realisees a deduire.
     *
     * @return int Returns the nb tds realisees a deduire.
     */
    public function getNbTdsRealiseesADeduire() {
        return $this->nbTdsRealiseesADeduire;
    }

    /**
     * Set the nb tds realisees a deduire.
     *
     * @param int $nbTdsRealiseesADeduire The nb tds realisees a deduire.
     */
    public function setNbTdsRealiseesADeduire($nbTdsRealiseesADeduire) {
        $this->nbTdsRealiseesADeduire = $nbTdsRealiseesADeduire;
        return $this;
    }
}
