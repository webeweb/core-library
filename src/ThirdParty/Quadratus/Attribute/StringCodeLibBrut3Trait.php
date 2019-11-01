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
 * Code lib brut3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeLibBrut3Trait {

    /**
     * Code lib brut3.
     *
     * @var string
     */
    private $codeLibBrut3;

    /**
     * Get the code lib brut3.
     *
     * @return string Returns the code lib brut3.
     */
    public function getCodeLibBrut3() {
        return $this->codeLibBrut3;
    }

    /**
     * Set the code lib brut3.
     *
     * @param string $codeLibBrut3 The code lib brut3.
     */
    public function setCodeLibBrut3($codeLibBrut3) {
        $this->codeLibBrut3 = $codeLibBrut3;
        return $this;
    }
}
