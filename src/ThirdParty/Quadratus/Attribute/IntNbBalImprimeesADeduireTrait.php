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
 * Nb bal imprimees a deduire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbBalImprimeesADeduireTrait {

    /**
     * Nb bal imprimees a deduire.
     *
     * @var int
     */
    private $nbBalImprimeesADeduire;

    /**
     * Get the nb bal imprimees a deduire.
     *
     * @return int Returns the nb bal imprimees a deduire.
     */
    public function getNbBalImprimeesADeduire() {
        return $this->nbBalImprimeesADeduire;
    }

    /**
     * Set the nb bal imprimees a deduire.
     *
     * @param int $nbBalImprimeesADeduire The nb bal imprimees a deduire.
     */
    public function setNbBalImprimeesADeduire($nbBalImprimeesADeduire) {
        $this->nbBalImprimeesADeduire = $nbBalImprimeesADeduire;
        return $this;
    }
}
