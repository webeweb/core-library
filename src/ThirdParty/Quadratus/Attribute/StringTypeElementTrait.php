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
 * Type element trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeElementTrait {

    /**
     * Type element.
     *
     * @var string
     */
    private $typeElement;

    /**
     * Get the type element.
     *
     * @return string Returns the type element.
     */
    public function getTypeElement() {
        return $this->typeElement;
    }

    /**
     * Set the type element.
     *
     * @param string $typeElement The type element.
     */
    public function setTypeElement($typeElement) {
        $this->typeElement = $typeElement;
        return $this;
    }
}
