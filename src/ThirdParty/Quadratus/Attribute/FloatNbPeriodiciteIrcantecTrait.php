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
 * Nb periodicite ircantec trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbPeriodiciteIrcantecTrait {

    /**
     * Nb periodicite ircantec.
     *
     * @var float
     */
    private $nbPeriodiciteIrcantec;

    /**
     * Get the nb periodicite ircantec.
     *
     * @return float Returns the nb periodicite ircantec.
     */
    public function getNbPeriodiciteIrcantec() {
        return $this->nbPeriodiciteIrcantec;
    }

    /**
     * Set the nb periodicite ircantec.
     *
     * @param float $nbPeriodiciteIrcantec The nb periodicite ircantec.
     */
    public function setNbPeriodiciteIrcantec($nbPeriodiciteIrcantec) {
        $this->nbPeriodiciteIrcantec = $nbPeriodiciteIrcantec;
        return $this;
    }
}
