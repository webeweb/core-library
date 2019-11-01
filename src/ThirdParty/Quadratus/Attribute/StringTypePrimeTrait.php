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
 * Type prime trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypePrimeTrait {

    /**
     * Type prime.
     *
     * @var string
     */
    private $typePrime;

    /**
     * Get the type prime.
     *
     * @return string Returns the type prime.
     */
    public function getTypePrime() {
        return $this->typePrime;
    }

    /**
     * Set the type prime.
     *
     * @param string $typePrime The type prime.
     */
    public function setTypePrime($typePrime) {
        $this->typePrime = $typePrime;
        return $this;
    }
}
