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
 * Der euros trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolDerEurosTrait {

    /**
     * Der euros.
     *
     * @var bool
     */
    private $derEuros;

    /**
     * Get the der euros.
     *
     * @return bool Returns the der euros.
     */
    public function getDerEuros() {
        return $this->derEuros;
    }

    /**
     * Set the der euros.
     *
     * @param bool $derEuros The der euros.
     */
    public function setDerEuros($derEuros) {
        $this->derEuros = $derEuros;
        return $this;
    }
}
