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
 * Code lib irc1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeLibIrc1Trait {

    /**
     * Code lib irc1.
     *
     * @var string
     */
    private $codeLibIrc1;

    /**
     * Get the code lib irc1.
     *
     * @return string Returns the code lib irc1.
     */
    public function getCodeLibIrc1() {
        return $this->codeLibIrc1;
    }

    /**
     * Set the code lib irc1.
     *
     * @param string $codeLibIrc1 The code lib irc1.
     */
    public function setCodeLibIrc1($codeLibIrc1) {
        $this->codeLibIrc1 = $codeLibIrc1;
        return $this;
    }
}
