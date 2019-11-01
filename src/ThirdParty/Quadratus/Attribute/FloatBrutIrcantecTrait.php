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
 * Brut ircantec trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatBrutIrcantecTrait {

    /**
     * Brut ircantec.
     *
     * @var float
     */
    private $brutIrcantec;

    /**
     * Get the brut ircantec.
     *
     * @return float Returns the brut ircantec.
     */
    public function getBrutIrcantec() {
        return $this->brutIrcantec;
    }

    /**
     * Set the brut ircantec.
     *
     * @param float $brutIrcantec The brut ircantec.
     */
    public function setBrutIrcantec($brutIrcantec) {
        $this->brutIrcantec = $brutIrcantec;
        return $this;
    }
}
