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
 * Nb ana imprimees a deduire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbAnaImprimeesADeduireTrait {

    /**
     * Nb ana imprimees a deduire.
     *
     * @var int
     */
    private $nbAnaImprimeesADeduire;

    /**
     * Get the nb ana imprimees a deduire.
     *
     * @return int Returns the nb ana imprimees a deduire.
     */
    public function getNbAnaImprimeesADeduire() {
        return $this->nbAnaImprimeesADeduire;
    }

    /**
     * Set the nb ana imprimees a deduire.
     *
     * @param int $nbAnaImprimeesADeduire The nb ana imprimees a deduire.
     */
    public function setNbAnaImprimeesADeduire($nbAnaImprimeesADeduire) {
        $this->nbAnaImprimeesADeduire = $nbAnaImprimeesADeduire;
        return $this;
    }
}
