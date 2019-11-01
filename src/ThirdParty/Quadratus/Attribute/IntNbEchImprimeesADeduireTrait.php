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
 * Nb ech imprimees a deduire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbEchImprimeesADeduireTrait {

    /**
     * Nb ech imprimees a deduire.
     *
     * @var int
     */
    private $nbEchImprimeesADeduire;

    /**
     * Get the nb ech imprimees a deduire.
     *
     * @return int Returns the nb ech imprimees a deduire.
     */
    public function getNbEchImprimeesADeduire() {
        return $this->nbEchImprimeesADeduire;
    }

    /**
     * Set the nb ech imprimees a deduire.
     *
     * @param int $nbEchImprimeesADeduire The nb ech imprimees a deduire.
     */
    public function setNbEchImprimeesADeduire($nbEchImprimeesADeduire) {
        $this->nbEchImprimeesADeduire = $nbEchImprimeesADeduire;
        return $this;
    }
}
