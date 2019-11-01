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
 * Nb dsn mensuelle trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbDsnMensuelleTrait {

    /**
     * Nb dsn mensuelle.
     *
     * @var int
     */
    private $nbDsnMensuelle;

    /**
     * Get the nb dsn mensuelle.
     *
     * @return int Returns the nb dsn mensuelle.
     */
    public function getNbDsnMensuelle() {
        return $this->nbDsnMensuelle;
    }

    /**
     * Set the nb dsn mensuelle.
     *
     * @param int $nbDsnMensuelle The nb dsn mensuelle.
     */
    public function setNbDsnMensuelle($nbDsnMensuelle) {
        $this->nbDsnMensuelle = $nbDsnMensuelle;
        return $this;
    }
}
