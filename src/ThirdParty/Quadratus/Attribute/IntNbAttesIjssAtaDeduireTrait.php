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
 * Nb attes ijss ata deduire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbAttesIjssAtaDeduireTrait {

    /**
     * Nb attes ijss ata deduire.
     *
     * @var int
     */
    private $nbAttesIjssAtaDeduire;

    /**
     * Get the nb attes ijss ata deduire.
     *
     * @return int Returns the nb attes ijss ata deduire.
     */
    public function getNbAttesIjssAtaDeduire() {
        return $this->nbAttesIjssAtaDeduire;
    }

    /**
     * Set the nb attes ijss ata deduire.
     *
     * @param int $nbAttesIjssAtaDeduire The nb attes ijss ata deduire.
     */
    public function setNbAttesIjssAtaDeduire($nbAttesIjssAtaDeduire) {
        $this->nbAttesIjssAtaDeduire = $nbAttesIjssAtaDeduire;
        return $this;
    }
}
