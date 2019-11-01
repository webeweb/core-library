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
 * Nb dads editees a deduire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbDadsEditeesADeduireTrait {

    /**
     * Nb dads editees a deduire.
     *
     * @var int
     */
    private $nbDadsEditeesADeduire;

    /**
     * Get the nb dads editees a deduire.
     *
     * @return int Returns the nb dads editees a deduire.
     */
    public function getNbDadsEditeesADeduire() {
        return $this->nbDadsEditeesADeduire;
    }

    /**
     * Set the nb dads editees a deduire.
     *
     * @param int $nbDadsEditeesADeduire The nb dads editees a deduire.
     */
    public function setNbDadsEditeesADeduire($nbDadsEditeesADeduire) {
        $this->nbDadsEditeesADeduire = $nbDadsEditeesADeduire;
        return $this;
    }
}
