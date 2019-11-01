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
 * Type proratisation prime trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeProratisationPrimeTrait {

    /**
     * Type proratisation prime.
     *
     * @var string
     */
    private $typeProratisationPrime;

    /**
     * Get the type proratisation prime.
     *
     * @return string Returns the type proratisation prime.
     */
    public function getTypeProratisationPrime() {
        return $this->typeProratisationPrime;
    }

    /**
     * Set the type proratisation prime.
     *
     * @param string $typeProratisationPrime The type proratisation prime.
     */
    public function setTypeProratisationPrime($typeProratisationPrime) {
        $this->typeProratisationPrime = $typeProratisationPrime;
        return $this;
    }
}
