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
 * Prmp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPrmpTrait {

    /**
     * Prmp.
     *
     * @var float
     */
    private $prmp;

    /**
     * Get the prmp.
     *
     * @return float Returns the prmp.
     */
    public function getPrmp() {
        return $this->prmp;
    }

    /**
     * Set the prmp.
     *
     * @param float $prmp The prmp.
     */
    public function setPrmp($prmp) {
        $this->prmp = $prmp;
        return $this;
    }
}
