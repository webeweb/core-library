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
 * Parts sociales trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPartsSocialesTrait {

    /**
     * Parts sociales.
     *
     * @var float
     */
    private $partsSociales;

    /**
     * Get the parts sociales.
     *
     * @return float Returns the parts sociales.
     */
    public function getPartsSociales() {
        return $this->partsSociales;
    }

    /**
     * Set the parts sociales.
     *
     * @param float $partsSociales The parts sociales.
     */
    public function setPartsSociales($partsSociales) {
        $this->partsSociales = $partsSociales;
        return $this;
    }
}
