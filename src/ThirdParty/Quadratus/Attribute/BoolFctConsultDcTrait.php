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
 * Fct consult dc trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolFctConsultDcTrait {

    /**
     * Fct consult dc.
     *
     * @var bool
     */
    private $fctConsultDc;

    /**
     * Get the fct consult dc.
     *
     * @return bool Returns the fct consult dc.
     */
    public function getFctConsultDc() {
        return $this->fctConsultDc;
    }

    /**
     * Set the fct consult dc.
     *
     * @param bool $fctConsultDc The fct consult dc.
     */
    public function setFctConsultDc($fctConsultDc) {
        $this->fctConsultDc = $fctConsultDc;
        return $this;
    }
}
