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
 * Pu base trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPuBaseTrait {

    /**
     * Pu base.
     *
     * @var float
     */
    private $puBase;

    /**
     * Get the pu base.
     *
     * @return float Returns the pu base.
     */
    public function getPuBase() {
        return $this->puBase;
    }

    /**
     * Set the pu base.
     *
     * @param float $puBase The pu base.
     */
    public function setPuBase($puBase) {
        $this->puBase = $puBase;
        return $this;
    }
}
