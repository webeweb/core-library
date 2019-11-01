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
 * Code regime1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeRegime1Trait {

    /**
     * Code regime1.
     *
     * @var string
     */
    private $codeRegime1;

    /**
     * Get the code regime1.
     *
     * @return string Returns the code regime1.
     */
    public function getCodeRegime1() {
        return $this->codeRegime1;
    }

    /**
     * Set the code regime1.
     *
     * @param string $codeRegime1 The code regime1.
     */
    public function setCodeRegime1($codeRegime1) {
        $this->codeRegime1 = $codeRegime1;
        return $this;
    }
}
