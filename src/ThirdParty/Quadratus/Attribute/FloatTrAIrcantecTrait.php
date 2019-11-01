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
 * Tr a ircantec trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTrAIrcantecTrait {

    /**
     * Tr a ircantec.
     *
     * @var float
     */
    private $trAIrcantec;

    /**
     * Get the tr a ircantec.
     *
     * @return float Returns the tr a ircantec.
     */
    public function getTrAIrcantec() {
        return $this->trAIrcantec;
    }

    /**
     * Set the tr a ircantec.
     *
     * @param float $trAIrcantec The tr a ircantec.
     */
    public function setTrAIrcantec($trAIrcantec) {
        $this->trAIrcantec = $trAIrcantec;
        return $this;
    }
}
