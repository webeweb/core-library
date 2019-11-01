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
 * Ind intemp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatIndIntempTrait {

    /**
     * Ind intemp.
     *
     * @var float
     */
    private $indIntemp;

    /**
     * Get the ind intemp.
     *
     * @return float Returns the ind intemp.
     */
    public function getIndIntemp() {
        return $this->indIntemp;
    }

    /**
     * Set the ind intemp.
     *
     * @param float $indIntemp The ind intemp.
     */
    public function setIndIntemp($indIntemp) {
        $this->indIntemp = $indIntemp;
        return $this;
    }
}
