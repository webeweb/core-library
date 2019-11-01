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
 * Type remun24 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeRemun24Trait {

    /**
     * Type remun24.
     *
     * @var string
     */
    private $typeRemun24;

    /**
     * Get the type remun24.
     *
     * @return string Returns the type remun24.
     */
    public function getTypeRemun24() {
        return $this->typeRemun24;
    }

    /**
     * Set the type remun24.
     *
     * @param string $typeRemun24 The type remun24.
     */
    public function setTypeRemun24($typeRemun24) {
        $this->typeRemun24 = $typeRemun24;
        return $this;
    }
}
