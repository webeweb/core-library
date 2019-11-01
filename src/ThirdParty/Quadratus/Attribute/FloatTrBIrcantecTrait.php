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
 * Tr b ircantec trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTrBIrcantecTrait {

    /**
     * Tr b ircantec.
     *
     * @var float
     */
    private $trBIrcantec;

    /**
     * Get the tr b ircantec.
     *
     * @return float Returns the tr b ircantec.
     */
    public function getTrBIrcantec() {
        return $this->trBIrcantec;
    }

    /**
     * Set the tr b ircantec.
     *
     * @param float $trBIrcantec The tr b ircantec.
     */
    public function setTrBIrcantec($trBIrcantec) {
        $this->trBIrcantec = $trBIrcantec;
        return $this;
    }
}
