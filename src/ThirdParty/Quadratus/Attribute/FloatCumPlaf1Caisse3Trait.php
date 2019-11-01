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
 * Cum plaf1 caisse3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumPlaf1Caisse3Trait {

    /**
     * Cum plaf1 caisse3.
     *
     * @var float
     */
    private $cumPlaf1Caisse3;

    /**
     * Get the cum plaf1 caisse3.
     *
     * @return float Returns the cum plaf1 caisse3.
     */
    public function getCumPlaf1Caisse3() {
        return $this->cumPlaf1Caisse3;
    }

    /**
     * Set the cum plaf1 caisse3.
     *
     * @param float $cumPlaf1Caisse3 The cum plaf1 caisse3.
     */
    public function setCumPlaf1Caisse3($cumPlaf1Caisse3) {
        $this->cumPlaf1Caisse3 = $cumPlaf1Caisse3;
        return $this;
    }
}
