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
 * Code lib brut2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeLibBrut2Trait {

    /**
     * Code lib brut2.
     *
     * @var string
     */
    private $codeLibBrut2;

    /**
     * Get the code lib brut2.
     *
     * @return string Returns the code lib brut2.
     */
    public function getCodeLibBrut2() {
        return $this->codeLibBrut2;
    }

    /**
     * Set the code lib brut2.
     *
     * @param string $codeLibBrut2 The code lib brut2.
     */
    public function setCodeLibBrut2($codeLibBrut2) {
        $this->codeLibBrut2 = $codeLibBrut2;
        return $this;
    }
}
