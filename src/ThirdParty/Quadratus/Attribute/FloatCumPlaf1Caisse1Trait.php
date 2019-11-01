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
 * Cum plaf1 caisse1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumPlaf1Caisse1Trait {

    /**
     * Cum plaf1 caisse1.
     *
     * @var float
     */
    private $cumPlaf1Caisse1;

    /**
     * Get the cum plaf1 caisse1.
     *
     * @return float Returns the cum plaf1 caisse1.
     */
    public function getCumPlaf1Caisse1() {
        return $this->cumPlaf1Caisse1;
    }

    /**
     * Set the cum plaf1 caisse1.
     *
     * @param float $cumPlaf1Caisse1 The cum plaf1 caisse1.
     */
    public function setCumPlaf1Caisse1($cumPlaf1Caisse1) {
        $this->cumPlaf1Caisse1 = $cumPlaf1Caisse1;
        return $this;
    }
}
