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
 * Type zone trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeZoneTrait {

    /**
     * Type zone.
     *
     * @var string
     */
    private $typeZone;

    /**
     * Get the type zone.
     *
     * @return string Returns the type zone.
     */
    public function getTypeZone() {
        return $this->typeZone;
    }

    /**
     * Set the type zone.
     *
     * @param string $typeZone The type zone.
     */
    public function setTypeZone($typeZone) {
        $this->typeZone = $typeZone;
        return $this;
    }
}
