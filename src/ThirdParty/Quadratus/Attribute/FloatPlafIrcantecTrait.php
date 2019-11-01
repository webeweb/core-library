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
 * Plaf ircantec trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPlafIrcantecTrait {

    /**
     * Plaf ircantec.
     *
     * @var float
     */
    private $plafIrcantec;

    /**
     * Get the plaf ircantec.
     *
     * @return float Returns the plaf ircantec.
     */
    public function getPlafIrcantec() {
        return $this->plafIrcantec;
    }

    /**
     * Set the plaf ircantec.
     *
     * @param float $plafIrcantec The plaf ircantec.
     */
    public function setPlafIrcantec($plafIrcantec) {
        $this->plafIrcantec = $plafIrcantec;
        return $this;
    }
}
