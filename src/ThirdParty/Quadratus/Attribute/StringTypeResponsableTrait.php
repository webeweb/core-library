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
 * Type responsable trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeResponsableTrait {

    /**
     * Type responsable.
     *
     * @var string
     */
    private $typeResponsable;

    /**
     * Get the type responsable.
     *
     * @return string Returns the type responsable.
     */
    public function getTypeResponsable() {
        return $this->typeResponsable;
    }

    /**
     * Set the type responsable.
     *
     * @param string $typeResponsable The type responsable.
     */
    public function setTypeResponsable($typeResponsable) {
        $this->typeResponsable = $typeResponsable;
        return $this;
    }
}
