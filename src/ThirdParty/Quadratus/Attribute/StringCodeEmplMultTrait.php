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
 * Code empl mult trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeEmplMultTrait {

    /**
     * Code empl mult.
     *
     * @var string
     */
    private $codeEmplMult;

    /**
     * Get the code empl mult.
     *
     * @return string Returns the code empl mult.
     */
    public function getCodeEmplMult() {
        return $this->codeEmplMult;
    }

    /**
     * Set the code empl mult.
     *
     * @param string $codeEmplMult The code empl mult.
     */
    public function setCodeEmplMult($codeEmplMult) {
        $this->codeEmplMult = $codeEmplMult;
        return $this;
    }
}
