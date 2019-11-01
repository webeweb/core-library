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
 * Type systeme info trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeSystemeInfoTrait {

    /**
     * Type systeme info.
     *
     * @var string
     */
    private $typeSystemeInfo;

    /**
     * Get the type systeme info.
     *
     * @return string Returns the type systeme info.
     */
    public function getTypeSystemeInfo() {
        return $this->typeSystemeInfo;
    }

    /**
     * Set the type systeme info.
     *
     * @param string $typeSystemeInfo The type systeme info.
     */
    public function setTypeSystemeInfo($typeSystemeInfo) {
        $this->typeSystemeInfo = $typeSystemeInfo;
        return $this;
    }
}
