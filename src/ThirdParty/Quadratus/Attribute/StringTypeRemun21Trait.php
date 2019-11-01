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
 * Type remun21 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeRemun21Trait {

    /**
     * Type remun21.
     *
     * @var string
     */
    private $typeRemun21;

    /**
     * Get the type remun21.
     *
     * @return string Returns the type remun21.
     */
    public function getTypeRemun21() {
        return $this->typeRemun21;
    }

    /**
     * Set the type remun21.
     *
     * @param string $typeRemun21 The type remun21.
     */
    public function setTypeRemun21($typeRemun21) {
        $this->typeRemun21 = $typeRemun21;
        return $this;
    }
}
