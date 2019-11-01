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
 * Code type b plaf3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeTypeBPlaf3Trait {

    /**
     * Code type b plaf3.
     *
     * @var string
     */
    private $codeTypeBPlaf3;

    /**
     * Get the code type b plaf3.
     *
     * @return string Returns the code type b plaf3.
     */
    public function getCodeTypeBPlaf3() {
        return $this->codeTypeBPlaf3;
    }

    /**
     * Set the code type b plaf3.
     *
     * @param string $codeTypeBPlaf3 The code type b plaf3.
     */
    public function setCodeTypeBPlaf3($codeTypeBPlaf3) {
        $this->codeTypeBPlaf3 = $codeTypeBPlaf3;
        return $this;
    }
}
