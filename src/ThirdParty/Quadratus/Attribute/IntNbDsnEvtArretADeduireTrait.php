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
 * Nb dsn evt arret a deduire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbDsnEvtArretADeduireTrait {

    /**
     * Nb dsn evt arret a deduire.
     *
     * @var int
     */
    private $nbDsnEvtArretADeduire;

    /**
     * Get the nb dsn evt arret a deduire.
     *
     * @return int Returns the nb dsn evt arret a deduire.
     */
    public function getNbDsnEvtArretADeduire() {
        return $this->nbDsnEvtArretADeduire;
    }

    /**
     * Set the nb dsn evt arret a deduire.
     *
     * @param int $nbDsnEvtArretADeduire The nb dsn evt arret a deduire.
     */
    public function setNbDsnEvtArretADeduire($nbDsnEvtArretADeduire) {
        $this->nbDsnEvtArretADeduire = $nbDsnEvtArretADeduire;
        return $this;
    }
}
