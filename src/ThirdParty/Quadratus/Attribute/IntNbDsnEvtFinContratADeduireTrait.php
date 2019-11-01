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
 * Nb dsn evt fin contrat a deduire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbDsnEvtFinContratADeduireTrait {

    /**
     * Nb dsn evt fin contrat a deduire.
     *
     * @var int
     */
    private $nbDsnEvtFinContratADeduire;

    /**
     * Get the nb dsn evt fin contrat a deduire.
     *
     * @return int Returns the nb dsn evt fin contrat a deduire.
     */
    public function getNbDsnEvtFinContratADeduire() {
        return $this->nbDsnEvtFinContratADeduire;
    }

    /**
     * Set the nb dsn evt fin contrat a deduire.
     *
     * @param int $nbDsnEvtFinContratADeduire The nb dsn evt fin contrat a deduire.
     */
    public function setNbDsnEvtFinContratADeduire($nbDsnEvtFinContratADeduire) {
        $this->nbDsnEvtFinContratADeduire = $nbDsnEvtFinContratADeduire;
        return $this;
    }
}
