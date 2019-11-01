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
 * Code lib irc3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeLibIrc3Trait {

    /**
     * Code lib irc3.
     *
     * @var string
     */
    private $codeLibIrc3;

    /**
     * Get the code lib irc3.
     *
     * @return string Returns the code lib irc3.
     */
    public function getCodeLibIrc3() {
        return $this->codeLibIrc3;
    }

    /**
     * Set the code lib irc3.
     *
     * @param string $codeLibIrc3 The code lib irc3.
     */
    public function setCodeLibIrc3($codeLibIrc3) {
        $this->codeLibIrc3 = $codeLibIrc3;
        return $this;
    }
}
