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
 * Code prime trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodePrimeTrait {

    /**
     * Code prime.
     *
     * @var string
     */
    private $codePrime;

    /**
     * Get the code prime.
     *
     * @return string Returns the code prime.
     */
    public function getCodePrime() {
        return $this->codePrime;
    }

    /**
     * Set the code prime.
     *
     * @param string $codePrime The code prime.
     */
    public function setCodePrime($codePrime) {
        $this->codePrime = $codePrime;
        return $this;
    }
}
