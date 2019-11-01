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
 * Type remun31 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeRemun31Trait {

    /**
     * Type remun31.
     *
     * @var string
     */
    private $typeRemun31;

    /**
     * Get the type remun31.
     *
     * @return string Returns the type remun31.
     */
    public function getTypeRemun31() {
        return $this->typeRemun31;
    }

    /**
     * Set the type remun31.
     *
     * @param string $typeRemun31 The type remun31.
     */
    public function setTypeRemun31($typeRemun31) {
        $this->typeRemun31 = $typeRemun31;
        return $this;
    }
}
