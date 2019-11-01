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
 * Tranche2 si trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTranche2SiTrait {

    /**
     * Tranche2 si.
     *
     * @var float
     */
    private $tranche2Si;

    /**
     * Get the tranche2 si.
     *
     * @return float Returns the tranche2 si.
     */
    public function getTranche2Si() {
        return $this->tranche2Si;
    }

    /**
     * Set the tranche2 si.
     *
     * @param float $tranche2Si The tranche2 si.
     */
    public function setTranche2Si($tranche2Si) {
        $this->tranche2Si = $tranche2Si;
        return $this;
    }
}
