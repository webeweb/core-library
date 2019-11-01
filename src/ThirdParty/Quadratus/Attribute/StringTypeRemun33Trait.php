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
 * Type remun33 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeRemun33Trait {

    /**
     * Type remun33.
     *
     * @var string
     */
    private $typeRemun33;

    /**
     * Get the type remun33.
     *
     * @return string Returns the type remun33.
     */
    public function getTypeRemun33() {
        return $this->typeRemun33;
    }

    /**
     * Set the type remun33.
     *
     * @param string $typeRemun33 The type remun33.
     */
    public function setTypeRemun33($typeRemun33) {
        $this->typeRemun33 = $typeRemun33;
        return $this;
    }
}
