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
 * Nbh sem ircantec trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbhSemIrcantecTrait {

    /**
     * Nbh sem ircantec.
     *
     * @var float
     */
    private $nbhSemIrcantec;

    /**
     * Get the nbh sem ircantec.
     *
     * @return float Returns the nbh sem ircantec.
     */
    public function getNbhSemIrcantec() {
        return $this->nbhSemIrcantec;
    }

    /**
     * Set the nbh sem ircantec.
     *
     * @param float $nbhSemIrcantec The nbh sem ircantec.
     */
    public function setNbhSemIrcantec($nbhSemIrcantec) {
        $this->nbhSemIrcantec = $nbhSemIrcantec;
        return $this;
    }
}
