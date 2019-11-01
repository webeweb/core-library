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
 * Code local type trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeLocalTypeTrait {

    /**
     * Code local type.
     *
     * @var string
     */
    private $codeLocalType;

    /**
     * Get the code local type.
     *
     * @return string Returns the code local type.
     */
    public function getCodeLocalType() {
        return $this->codeLocalType;
    }

    /**
     * Set the code local type.
     *
     * @param string $codeLocalType The code local type.
     */
    public function setCodeLocalType($codeLocalType) {
        $this->codeLocalType = $codeLocalType;
        return $this;
    }
}
