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
 * Code lib brut4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeLibBrut4Trait {

    /**
     * Code lib brut4.
     *
     * @var string
     */
    private $codeLibBrut4;

    /**
     * Get the code lib brut4.
     *
     * @return string Returns the code lib brut4.
     */
    public function getCodeLibBrut4() {
        return $this->codeLibBrut4;
    }

    /**
     * Set the code lib brut4.
     *
     * @param string $codeLibBrut4 The code lib brut4.
     */
    public function setCodeLibBrut4($codeLibBrut4) {
        $this->codeLibBrut4 = $codeLibBrut4;
        return $this;
    }
}
