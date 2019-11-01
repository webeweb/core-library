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
 * Type remun23 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeRemun23Trait {

    /**
     * Type remun23.
     *
     * @var string
     */
    private $typeRemun23;

    /**
     * Get the type remun23.
     *
     * @return string Returns the type remun23.
     */
    public function getTypeRemun23() {
        return $this->typeRemun23;
    }

    /**
     * Set the type remun23.
     *
     * @param string $typeRemun23 The type remun23.
     */
    public function setTypeRemun23($typeRemun23) {
        $this->typeRemun23 = $typeRemun23;
        return $this;
    }
}
