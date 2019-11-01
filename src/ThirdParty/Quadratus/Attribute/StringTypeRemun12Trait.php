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
 * Type remun12 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeRemun12Trait {

    /**
     * Type remun12.
     *
     * @var string
     */
    private $typeRemun12;

    /**
     * Get the type remun12.
     *
     * @return string Returns the type remun12.
     */
    public function getTypeRemun12() {
        return $this->typeRemun12;
    }

    /**
     * Set the type remun12.
     *
     * @param string $typeRemun12 The type remun12.
     */
    public function setTypeRemun12($typeRemun12) {
        $this->typeRemun12 = $typeRemun12;
        return $this;
    }
}
