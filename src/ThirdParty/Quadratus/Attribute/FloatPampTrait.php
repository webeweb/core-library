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
 * Pamp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPampTrait {

    /**
     * Pamp.
     *
     * @var float
     */
    private $pamp;

    /**
     * Get the pamp.
     *
     * @return float Returns the pamp.
     */
    public function getPamp() {
        return $this->pamp;
    }

    /**
     * Set the pamp.
     *
     * @param float $pamp The pamp.
     */
    public function setPamp($pamp) {
        $this->pamp = $pamp;
        return $this;
    }
}
