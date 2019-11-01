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
 * Nb tab amort imprimes a deduire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbTabAmortImprimesADeduireTrait {

    /**
     * Nb tab amort imprimes a deduire.
     *
     * @var int
     */
    private $nbTabAmortImprimesADeduire;

    /**
     * Get the nb tab amort imprimes a deduire.
     *
     * @return int Returns the nb tab amort imprimes a deduire.
     */
    public function getNbTabAmortImprimesADeduire() {
        return $this->nbTabAmortImprimesADeduire;
    }

    /**
     * Set the nb tab amort imprimes a deduire.
     *
     * @param int $nbTabAmortImprimesADeduire The nb tab amort imprimes a deduire.
     */
    public function setNbTabAmortImprimesADeduire($nbTabAmortImprimesADeduire) {
        $this->nbTabAmortImprimesADeduire = $nbTabAmortImprimesADeduire;
        return $this;
    }
}
