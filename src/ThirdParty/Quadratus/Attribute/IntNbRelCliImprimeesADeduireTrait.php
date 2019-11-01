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
 * Nb rel cli imprimees a deduire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbRelCliImprimeesADeduireTrait {

    /**
     * Nb rel cli imprimees a deduire.
     *
     * @var int
     */
    private $nbRelCliImprimeesADeduire;

    /**
     * Get the nb rel cli imprimees a deduire.
     *
     * @return int Returns the nb rel cli imprimees a deduire.
     */
    public function getNbRelCliImprimeesADeduire() {
        return $this->nbRelCliImprimeesADeduire;
    }

    /**
     * Set the nb rel cli imprimees a deduire.
     *
     * @param int $nbRelCliImprimeesADeduire The nb rel cli imprimees a deduire.
     */
    public function setNbRelCliImprimeesADeduire($nbRelCliImprimeesADeduire) {
        $this->nbRelCliImprimeesADeduire = $nbRelCliImprimeesADeduire;
        return $this;
    }
}
