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
 * Periodicite ircantec trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringPeriodiciteIrcantecTrait {

    /**
     * Periodicite ircantec.
     *
     * @var string
     */
    private $periodiciteIrcantec;

    /**
     * Get the periodicite ircantec.
     *
     * @return string Returns the periodicite ircantec.
     */
    public function getPeriodiciteIrcantec() {
        return $this->periodiciteIrcantec;
    }

    /**
     * Set the periodicite ircantec.
     *
     * @param string $periodiciteIrcantec The periodicite ircantec.
     */
    public function setPeriodiciteIrcantec($periodiciteIrcantec) {
        $this->periodiciteIrcantec = $periodiciteIrcantec;
        return $this;
    }
}
