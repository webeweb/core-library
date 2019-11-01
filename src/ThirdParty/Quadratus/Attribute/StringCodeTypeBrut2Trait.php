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
 * Code type brut2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeTypeBrut2Trait {

    /**
     * Code type brut2.
     *
     * @var string
     */
    private $codeTypeBrut2;

    /**
     * Get the code type brut2.
     *
     * @return string Returns the code type brut2.
     */
    public function getCodeTypeBrut2() {
        return $this->codeTypeBrut2;
    }

    /**
     * Set the code type brut2.
     *
     * @param string $codeTypeBrut2 The code type brut2.
     */
    public function setCodeTypeBrut2($codeTypeBrut2) {
        $this->codeTypeBrut2 = $codeTypeBrut2;
        return $this;
    }
}
