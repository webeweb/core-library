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
 * Type rempl defaut trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeRemplDefautTrait {

    /**
     * Type rempl defaut.
     *
     * @var string
     */
    private $typeRemplDefaut;

    /**
     * Get the type rempl defaut.
     *
     * @return string Returns the type rempl defaut.
     */
    public function getTypeRemplDefaut() {
        return $this->typeRemplDefaut;
    }

    /**
     * Set the type rempl defaut.
     *
     * @param string $typeRemplDefaut The type rempl defaut.
     */
    public function setTypeRemplDefaut($typeRemplDefaut) {
        $this->typeRemplDefaut = $typeRemplDefaut;
        return $this;
    }
}
