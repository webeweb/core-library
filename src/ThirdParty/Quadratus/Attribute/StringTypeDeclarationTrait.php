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
 * Type declaration trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeDeclarationTrait {

    /**
     * Type declaration.
     *
     * @var string
     */
    private $typeDeclaration;

    /**
     * Get the type declaration.
     *
     * @return string Returns the type declaration.
     */
    public function getTypeDeclaration() {
        return $this->typeDeclaration;
    }

    /**
     * Set the type declaration.
     *
     * @param string $typeDeclaration The type declaration.
     */
    public function setTypeDeclaration($typeDeclaration) {
        $this->typeDeclaration = $typeDeclaration;
        return $this;
    }
}
