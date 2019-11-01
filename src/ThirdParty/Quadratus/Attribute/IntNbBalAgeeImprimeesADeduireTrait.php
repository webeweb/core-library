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
 * Nb bal agee imprimees a deduire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbBalAgeeImprimeesADeduireTrait {

    /**
     * Nb bal agee imprimees a deduire.
     *
     * @var int
     */
    private $nbBalAgeeImprimeesADeduire;

    /**
     * Get the nb bal agee imprimees a deduire.
     *
     * @return int Returns the nb bal agee imprimees a deduire.
     */
    public function getNbBalAgeeImprimeesADeduire() {
        return $this->nbBalAgeeImprimeesADeduire;
    }

    /**
     * Set the nb bal agee imprimees a deduire.
     *
     * @param int $nbBalAgeeImprimeesADeduire The nb bal agee imprimees a deduire.
     */
    public function setNbBalAgeeImprimeesADeduire($nbBalAgeeImprimeesADeduire) {
        $this->nbBalAgeeImprimeesADeduire = $nbBalAgeeImprimeesADeduire;
        return $this;
    }
}
