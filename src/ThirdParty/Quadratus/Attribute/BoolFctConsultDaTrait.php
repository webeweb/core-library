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
 * Fct consult da trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolFctConsultDaTrait {

    /**
     * Fct consult da.
     *
     * @var bool
     */
    private $fctConsultDa;

    /**
     * Get the fct consult da.
     *
     * @return bool Returns the fct consult da.
     */
    public function getFctConsultDa() {
        return $this->fctConsultDa;
    }

    /**
     * Set the fct consult da.
     *
     * @param bool $fctConsultDa The fct consult da.
     */
    public function setFctConsultDa($fctConsultDa) {
        $this->fctConsultDa = $fctConsultDa;
        return $this;
    }
}
