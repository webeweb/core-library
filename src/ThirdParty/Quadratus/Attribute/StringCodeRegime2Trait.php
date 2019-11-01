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
 * Code regime2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeRegime2Trait {

    /**
     * Code regime2.
     *
     * @var string
     */
    private $codeRegime2;

    /**
     * Get the code regime2.
     *
     * @return string Returns the code regime2.
     */
    public function getCodeRegime2() {
        return $this->codeRegime2;
    }

    /**
     * Set the code regime2.
     *
     * @param string $codeRegime2 The code regime2.
     */
    public function setCodeRegime2($codeRegime2) {
        $this->codeRegime2 = $codeRegime2;
        return $this;
    }
}
