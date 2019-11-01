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
 * H abs mens trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatHAbsMensTrait {

    /**
     * H abs mens.
     *
     * @var float
     */
    private $hAbsMens;

    /**
     * Get the h abs mens.
     *
     * @return float Returns the h abs mens.
     */
    public function getHAbsMens() {
        return $this->hAbsMens;
    }

    /**
     * Set the h abs mens.
     *
     * @param float $hAbsMens The h abs mens.
     */
    public function setHAbsMens($hAbsMens) {
        $this->hAbsMens = $hAbsMens;
        return $this;
    }
}
