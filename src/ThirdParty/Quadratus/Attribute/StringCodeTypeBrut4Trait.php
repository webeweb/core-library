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
 * Code type brut4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeTypeBrut4Trait {

    /**
     * Code type brut4.
     *
     * @var string
     */
    private $codeTypeBrut4;

    /**
     * Get the code type brut4.
     *
     * @return string Returns the code type brut4.
     */
    public function getCodeTypeBrut4() {
        return $this->codeTypeBrut4;
    }

    /**
     * Set the code type brut4.
     *
     * @param string $codeTypeBrut4 The code type brut4.
     */
    public function setCodeTypeBrut4($codeTypeBrut4) {
        $this->codeTypeBrut4 = $codeTypeBrut4;
        return $this;
    }
}
