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
 * Cum tranche2 si trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumTranche2SiTrait {

    /**
     * Cum tranche2 si.
     *
     * @var float
     */
    private $cumTranche2Si;

    /**
     * Get the cum tranche2 si.
     *
     * @return float Returns the cum tranche2 si.
     */
    public function getCumTranche2Si() {
        return $this->cumTranche2Si;
    }

    /**
     * Set the cum tranche2 si.
     *
     * @param float $cumTranche2Si The cum tranche2 si.
     */
    public function setCumTranche2Si($cumTranche2Si) {
        $this->cumTranche2Si = $cumTranche2Si;
        return $this;
    }
}
