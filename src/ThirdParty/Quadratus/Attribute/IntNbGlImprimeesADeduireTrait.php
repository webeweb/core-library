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
 * Nb gl imprimees a deduire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbGlImprimeesADeduireTrait {

    /**
     * Nb gl imprimees a deduire.
     *
     * @var int
     */
    private $nbGlImprimeesADeduire;

    /**
     * Get the nb gl imprimees a deduire.
     *
     * @return int Returns the nb gl imprimees a deduire.
     */
    public function getNbGlImprimeesADeduire() {
        return $this->nbGlImprimeesADeduire;
    }

    /**
     * Set the nb gl imprimees a deduire.
     *
     * @param int $nbGlImprimeesADeduire The nb gl imprimees a deduire.
     */
    public function setNbGlImprimeesADeduire($nbGlImprimeesADeduire) {
        $this->nbGlImprimeesADeduire = $nbGlImprimeesADeduire;
        return $this;
    }
}
