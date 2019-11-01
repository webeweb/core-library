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
 * Type code prime trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeCodePrimeTrait {

    /**
     * Type code prime.
     *
     * @var string
     */
    private $typeCodePrime;

    /**
     * Get the type code prime.
     *
     * @return string Returns the type code prime.
     */
    public function getTypeCodePrime() {
        return $this->typeCodePrime;
    }

    /**
     * Set the type code prime.
     *
     * @param string $typeCodePrime The type code prime.
     */
    public function setTypeCodePrime($typeCodePrime) {
        $this->typeCodePrime = $typeCodePrime;
        return $this;
    }
}
