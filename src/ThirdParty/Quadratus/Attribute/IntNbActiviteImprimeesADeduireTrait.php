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
 * Nb activite imprimees a deduire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbActiviteImprimeesADeduireTrait {

    /**
     * Nb activite imprimees a deduire.
     *
     * @var int
     */
    private $nbActiviteImprimeesADeduire;

    /**
     * Get the nb activite imprimees a deduire.
     *
     * @return int Returns the nb activite imprimees a deduire.
     */
    public function getNbActiviteImprimeesADeduire() {
        return $this->nbActiviteImprimeesADeduire;
    }

    /**
     * Set the nb activite imprimees a deduire.
     *
     * @param int $nbActiviteImprimeesADeduire The nb activite imprimees a deduire.
     */
    public function setNbActiviteImprimeesADeduire($nbActiviteImprimeesADeduire) {
        $this->nbActiviteImprimeesADeduire = $nbActiviteImprimeesADeduire;
        return $this;
    }
}
