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
 * Avantage nature prime trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAvantageNaturePrimeTrait {

    /**
     * Avantage nature prime.
     *
     * @var bool
     */
    private $avantageNaturePrime;

    /**
     * Get the avantage nature prime.
     *
     * @return bool Returns the avantage nature prime.
     */
    public function getAvantageNaturePrime() {
        return $this->avantageNaturePrime;
    }

    /**
     * Set the avantage nature prime.
     *
     * @param bool $avantageNaturePrime The avantage nature prime.
     */
    public function setAvantageNaturePrime($avantageNaturePrime) {
        $this->avantageNaturePrime = $avantageNaturePrime;
        return $this;
    }
}
