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
 * Fct balance generale trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolFctBalanceGeneraleTrait {

    /**
     * Fct balance generale.
     *
     * @var bool
     */
    private $fctBalanceGenerale;

    /**
     * Get the fct balance generale.
     *
     * @return bool Returns the fct balance generale.
     */
    public function getFctBalanceGenerale() {
        return $this->fctBalanceGenerale;
    }

    /**
     * Set the fct balance generale.
     *
     * @param bool $fctBalanceGenerale The fct balance generale.
     */
    public function setFctBalanceGenerale($fctBalanceGenerale) {
        $this->fctBalanceGenerale = $fctBalanceGenerale;
        return $this;
    }
}
