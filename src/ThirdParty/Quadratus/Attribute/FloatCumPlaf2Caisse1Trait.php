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
 * Cum plaf2 caisse1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumPlaf2Caisse1Trait {

    /**
     * Cum plaf2 caisse1.
     *
     * @var float
     */
    private $cumPlaf2Caisse1;

    /**
     * Get the cum plaf2 caisse1.
     *
     * @return float Returns the cum plaf2 caisse1.
     */
    public function getCumPlaf2Caisse1() {
        return $this->cumPlaf2Caisse1;
    }

    /**
     * Set the cum plaf2 caisse1.
     *
     * @param float $cumPlaf2Caisse1 The cum plaf2 caisse1.
     */
    public function setCumPlaf2Caisse1($cumPlaf2Caisse1) {
        $this->cumPlaf2Caisse1 = $cumPlaf2Caisse1;
        return $this;
    }
}
