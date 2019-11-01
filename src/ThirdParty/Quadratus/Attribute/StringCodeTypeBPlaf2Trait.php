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
 * Code type b plaf2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeTypeBPlaf2Trait {

    /**
     * Code type b plaf2.
     *
     * @var string
     */
    private $codeTypeBPlaf2;

    /**
     * Get the code type b plaf2.
     *
     * @return string Returns the code type b plaf2.
     */
    public function getCodeTypeBPlaf2() {
        return $this->codeTypeBPlaf2;
    }

    /**
     * Set the code type b plaf2.
     *
     * @param string $codeTypeBPlaf2 The code type b plaf2.
     */
    public function setCodeTypeBPlaf2($codeTypeBPlaf2) {
        $this->codeTypeBPlaf2 = $codeTypeBPlaf2;
        return $this;
    }
}
