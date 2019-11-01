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
 * Nb duea deduire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbDueaDeduireTrait {

    /**
     * Nb duea deduire.
     *
     * @var int
     */
    private $nbDueaDeduire;

    /**
     * Get the nb duea deduire.
     *
     * @return int Returns the nb duea deduire.
     */
    public function getNbDueaDeduire() {
        return $this->nbDueaDeduire;
    }

    /**
     * Set the nb duea deduire.
     *
     * @param int $nbDueaDeduire The nb duea deduire.
     */
    public function setNbDueaDeduire($nbDueaDeduire) {
        $this->nbDueaDeduire = $nbDueaDeduire;
        return $this;
    }
}
