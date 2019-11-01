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
 * Type gestion etebac trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeGestionEtebacTrait {

    /**
     * Type gestion etebac.
     *
     * @var string
     */
    private $typeGestionEtebac;

    /**
     * Get the type gestion etebac.
     *
     * @return string Returns the type gestion etebac.
     */
    public function getTypeGestionEtebac() {
        return $this->typeGestionEtebac;
    }

    /**
     * Set the type gestion etebac.
     *
     * @param string $typeGestionEtebac The type gestion etebac.
     */
    public function setTypeGestionEtebac($typeGestionEtebac) {
        $this->typeGestionEtebac = $typeGestionEtebac;
        return $this;
    }
}
