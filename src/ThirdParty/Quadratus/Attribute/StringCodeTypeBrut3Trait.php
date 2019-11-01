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
 * Code type brut3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeTypeBrut3Trait {

    /**
     * Code type brut3.
     *
     * @var string
     */
    private $codeTypeBrut3;

    /**
     * Get the code type brut3.
     *
     * @return string Returns the code type brut3.
     */
    public function getCodeTypeBrut3() {
        return $this->codeTypeBrut3;
    }

    /**
     * Set the code type brut3.
     *
     * @param string $codeTypeBrut3 The code type brut3.
     */
    public function setCodeTypeBrut3($codeTypeBrut3) {
        $this->codeTypeBrut3 = $codeTypeBrut3;
        return $this;
    }
}
