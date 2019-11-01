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
 * Code type trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeTypeTrait {

    /**
     * Code type.
     *
     * @var string
     */
    private $codeType;

    /**
     * Get the code type.
     *
     * @return string Returns the code type.
     */
    public function getCodeType() {
        return $this->codeType;
    }

    /**
     * Set the code type.
     *
     * @param string $codeType The code type.
     */
    public function setCodeType($codeType) {
        $this->codeType = $codeType;
        return $this;
    }
}
