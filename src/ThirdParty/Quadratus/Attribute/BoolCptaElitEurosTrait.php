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
 * Cpta elit euros trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCptaElitEurosTrait {

    /**
     * Cpta elit euros.
     *
     * @var bool
     */
    private $cptaElitEuros;

    /**
     * Get the cpta elit euros.
     *
     * @return bool Returns the cpta elit euros.
     */
    public function getCptaElitEuros() {
        return $this->cptaElitEuros;
    }

    /**
     * Set the cpta elit euros.
     *
     * @param bool $cptaElitEuros The cpta elit euros.
     */
    public function setCptaElitEuros($cptaElitEuros) {
        $this->cptaElitEuros = $cptaElitEuros;
        return $this;
    }
}
