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
 * Type remun32 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeRemun32Trait {

    /**
     * Type remun32.
     *
     * @var string
     */
    private $typeRemun32;

    /**
     * Get the type remun32.
     *
     * @return string Returns the type remun32.
     */
    public function getTypeRemun32() {
        return $this->typeRemun32;
    }

    /**
     * Set the type remun32.
     *
     * @param string $typeRemun32 The type remun32.
     */
    public function setTypeRemun32($typeRemun32) {
        $this->typeRemun32 = $typeRemun32;
        return $this;
    }
}
