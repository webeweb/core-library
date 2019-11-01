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
 * Code lib brut5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeLibBrut5Trait {

    /**
     * Code lib brut5.
     *
     * @var string
     */
    private $codeLibBrut5;

    /**
     * Get the code lib brut5.
     *
     * @return string Returns the code lib brut5.
     */
    public function getCodeLibBrut5() {
        return $this->codeLibBrut5;
    }

    /**
     * Set the code lib brut5.
     *
     * @param string $codeLibBrut5 The code lib brut5.
     */
    public function setCodeLibBrut5($codeLibBrut5) {
        $this->codeLibBrut5 = $codeLibBrut5;
        return $this;
    }
}
