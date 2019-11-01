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
 * Code type brut5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeTypeBrut5Trait {

    /**
     * Code type brut5.
     *
     * @var string
     */
    private $codeTypeBrut5;

    /**
     * Get the code type brut5.
     *
     * @return string Returns the code type brut5.
     */
    public function getCodeTypeBrut5() {
        return $this->codeTypeBrut5;
    }

    /**
     * Set the code type brut5.
     *
     * @param string $codeTypeBrut5 The code type brut5.
     */
    public function setCodeTypeBrut5($codeTypeBrut5) {
        $this->codeTypeBrut5 = $codeTypeBrut5;
        return $this;
    }
}
