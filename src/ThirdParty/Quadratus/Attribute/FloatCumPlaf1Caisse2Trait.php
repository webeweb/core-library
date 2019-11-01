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
 * Cum plaf1 caisse2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumPlaf1Caisse2Trait {

    /**
     * Cum plaf1 caisse2.
     *
     * @var float
     */
    private $cumPlaf1Caisse2;

    /**
     * Get the cum plaf1 caisse2.
     *
     * @return float Returns the cum plaf1 caisse2.
     */
    public function getCumPlaf1Caisse2() {
        return $this->cumPlaf1Caisse2;
    }

    /**
     * Set the cum plaf1 caisse2.
     *
     * @param float $cumPlaf1Caisse2 The cum plaf1 caisse2.
     */
    public function setCumPlaf1Caisse2($cumPlaf1Caisse2) {
        $this->cumPlaf1Caisse2 = $cumPlaf1Caisse2;
        return $this;
    }
}
