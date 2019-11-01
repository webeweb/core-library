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
 * Nb attes ijss a deduire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbAttesIjssADeduireTrait {

    /**
     * Nb attes ijss a deduire.
     *
     * @var int
     */
    private $nbAttesIjssADeduire;

    /**
     * Get the nb attes ijss a deduire.
     *
     * @return int Returns the nb attes ijss a deduire.
     */
    public function getNbAttesIjssADeduire() {
        return $this->nbAttesIjssADeduire;
    }

    /**
     * Set the nb attes ijss a deduire.
     *
     * @param int $nbAttesIjssADeduire The nb attes ijss a deduire.
     */
    public function setNbAttesIjssADeduire($nbAttesIjssADeduire) {
        $this->nbAttesIjssADeduire = $nbAttesIjssADeduire;
        return $this;
    }
}
