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
 * Type avenant trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeAvenantTrait {

    /**
     * Type avenant.
     *
     * @var string
     */
    private $typeAvenant;

    /**
     * Get the type avenant.
     *
     * @return string Returns the type avenant.
     */
    public function getTypeAvenant() {
        return $this->typeAvenant;
    }

    /**
     * Set the type avenant.
     *
     * @param string $typeAvenant The type avenant.
     */
    public function setTypeAvenant($typeAvenant) {
        $this->typeAvenant = $typeAvenant;
        return $this;
    }
}
