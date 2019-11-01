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
 * Avt der euros trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAvtDerEurosTrait {

    /**
     * Avt der euros.
     *
     * @var bool
     */
    private $avtDerEuros;

    /**
     * Get the avt der euros.
     *
     * @return bool Returns the avt der euros.
     */
    public function getAvtDerEuros() {
        return $this->avtDerEuros;
    }

    /**
     * Set the avt der euros.
     *
     * @param bool $avtDerEuros The avt der euros.
     */
    public function setAvtDerEuros($avtDerEuros) {
        $this->avtDerEuros = $avtDerEuros;
        return $this;
    }
}
