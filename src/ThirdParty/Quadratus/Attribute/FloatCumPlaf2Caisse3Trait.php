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
 * Cum plaf2 caisse3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumPlaf2Caisse3Trait {

    /**
     * Cum plaf2 caisse3.
     *
     * @var float
     */
    private $cumPlaf2Caisse3;

    /**
     * Get the cum plaf2 caisse3.
     *
     * @return float Returns the cum plaf2 caisse3.
     */
    public function getCumPlaf2Caisse3() {
        return $this->cumPlaf2Caisse3;
    }

    /**
     * Set the cum plaf2 caisse3.
     *
     * @param float $cumPlaf2Caisse3 The cum plaf2 caisse3.
     */
    public function setCumPlaf2Caisse3($cumPlaf2Caisse3) {
        $this->cumPlaf2Caisse3 = $cumPlaf2Caisse3;
        return $this;
    }
}
