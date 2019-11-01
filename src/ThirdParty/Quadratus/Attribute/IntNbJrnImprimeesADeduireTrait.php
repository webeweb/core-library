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
 * Nb jrn imprimees a deduire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbJrnImprimeesADeduireTrait {

    /**
     * Nb jrn imprimees a deduire.
     *
     * @var int
     */
    private $nbJrnImprimeesADeduire;

    /**
     * Get the nb jrn imprimees a deduire.
     *
     * @return int Returns the nb jrn imprimees a deduire.
     */
    public function getNbJrnImprimeesADeduire() {
        return $this->nbJrnImprimeesADeduire;
    }

    /**
     * Set the nb jrn imprimees a deduire.
     *
     * @param int $nbJrnImprimeesADeduire The nb jrn imprimees a deduire.
     */
    public function setNbJrnImprimeesADeduire($nbJrnImprimeesADeduire) {
        $this->nbJrnImprimeesADeduire = $nbJrnImprimeesADeduire;
        return $this;
    }
}
