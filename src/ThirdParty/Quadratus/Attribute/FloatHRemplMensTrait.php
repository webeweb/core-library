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
 * H rempl mens trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatHRemplMensTrait {

    /**
     * H rempl mens.
     *
     * @var float
     */
    private $hRemplMens;

    /**
     * Get the h rempl mens.
     *
     * @return float Returns the h rempl mens.
     */
    public function getHRemplMens() {
        return $this->hRemplMens;
    }

    /**
     * Set the h rempl mens.
     *
     * @param float $hRemplMens The h rempl mens.
     */
    public function setHRemplMens($hRemplMens) {
        $this->hRemplMens = $hRemplMens;
        return $this;
    }
}
