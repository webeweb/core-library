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
 * Code lib irc2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeLibIrc2Trait {

    /**
     * Code lib irc2.
     *
     * @var string
     */
    private $codeLibIrc2;

    /**
     * Get the code lib irc2.
     *
     * @return string Returns the code lib irc2.
     */
    public function getCodeLibIrc2() {
        return $this->codeLibIrc2;
    }

    /**
     * Set the code lib irc2.
     *
     * @param string $codeLibIrc2 The code lib irc2.
     */
    public function setCodeLibIrc2($codeLibIrc2) {
        $this->codeLibIrc2 = $codeLibIrc2;
        return $this;
    }
}
