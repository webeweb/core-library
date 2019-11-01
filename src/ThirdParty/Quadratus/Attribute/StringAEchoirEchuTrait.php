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
 * A echoir echu trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAEchoirEchuTrait {

    /**
     * A echoir echu.
     *
     * @var string
     */
    private $aEchoirEchu;

    /**
     * Get the a echoir echu.
     *
     * @return string Returns the a echoir echu.
     */
    public function getAEchoirEchu() {
        return $this->aEchoirEchu;
    }

    /**
     * Set the a echoir echu.
     *
     * @param string $aEchoirEchu The a echoir echu.
     */
    public function setAEchoirEchu($aEchoirEchu) {
        $this->aEchoirEchu = $aEchoirEchu;
        return $this;
    }
}
