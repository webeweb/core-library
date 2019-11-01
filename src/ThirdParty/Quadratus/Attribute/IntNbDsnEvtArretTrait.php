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
 * Nb dsn evt arret trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbDsnEvtArretTrait {

    /**
     * Nb dsn evt arret.
     *
     * @var int
     */
    private $nbDsnEvtArret;

    /**
     * Get the nb dsn evt arret.
     *
     * @return int Returns the nb dsn evt arret.
     */
    public function getNbDsnEvtArret() {
        return $this->nbDsnEvtArret;
    }

    /**
     * Set the nb dsn evt arret.
     *
     * @param int $nbDsnEvtArret The nb dsn evt arret.
     */
    public function setNbDsnEvtArret($nbDsnEvtArret) {
        $this->nbDsnEvtArret = $nbDsnEvtArret;
        return $this;
    }
}
