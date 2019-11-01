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
 * Type gestion trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeGestionTrait {

    /**
     * Type gestion.
     *
     * @var string
     */
    private $typeGestion;

    /**
     * Get the type gestion.
     *
     * @return string Returns the type gestion.
     */
    public function getTypeGestion() {
        return $this->typeGestion;
    }

    /**
     * Set the type gestion.
     *
     * @param string $typeGestion The type gestion.
     */
    public function setTypeGestion($typeGestion) {
        $this->typeGestion = $typeGestion;
        return $this;
    }
}
