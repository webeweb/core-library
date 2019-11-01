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
 * Fct declare tva trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolFctDeclareTvaTrait {

    /**
     * Fct declare tva.
     *
     * @var bool
     */
    private $fctDeclareTva;

    /**
     * Get the fct declare tva.
     *
     * @return bool Returns the fct declare tva.
     */
    public function getFctDeclareTva() {
        return $this->fctDeclareTva;
    }

    /**
     * Set the fct declare tva.
     *
     * @param bool $fctDeclareTva The fct declare tva.
     */
    public function setFctDeclareTva($fctDeclareTva) {
        $this->fctDeclareTva = $fctDeclareTva;
        return $this;
    }
}
