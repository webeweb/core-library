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
 * Nb dsn mensuelle a deduire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbDsnMensuelleADeduireTrait {

    /**
     * Nb dsn mensuelle a deduire.
     *
     * @var int
     */
    private $nbDsnMensuelleADeduire;

    /**
     * Get the nb dsn mensuelle a deduire.
     *
     * @return int Returns the nb dsn mensuelle a deduire.
     */
    public function getNbDsnMensuelleADeduire() {
        return $this->nbDsnMensuelleADeduire;
    }

    /**
     * Set the nb dsn mensuelle a deduire.
     *
     * @param int $nbDsnMensuelleADeduire The nb dsn mensuelle a deduire.
     */
    public function setNbDsnMensuelleADeduire($nbDsnMensuelleADeduire) {
        $this->nbDsnMensuelleADeduire = $nbDsnMensuelleADeduire;
        return $this;
    }
}
