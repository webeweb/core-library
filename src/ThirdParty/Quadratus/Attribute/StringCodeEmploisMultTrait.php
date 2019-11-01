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
 * Code emplois mult trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeEmploisMultTrait {

    /**
     * Code emplois mult.
     *
     * @var string
     */
    private $codeEmploisMult;

    /**
     * Get the code emplois mult.
     *
     * @return string Returns the code emplois mult.
     */
    public function getCodeEmploisMult() {
        return $this->codeEmploisMult;
    }

    /**
     * Set the code emplois mult.
     *
     * @param string $codeEmploisMult The code emplois mult.
     */
    public function setCodeEmploisMult($codeEmploisMult) {
        $this->codeEmploisMult = $codeEmploisMult;
        return $this;
    }
}
