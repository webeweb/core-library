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
 * Rr acquis trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatRrAcquisTrait {

    /**
     * Rr acquis.
     *
     * @var float
     */
    private $rrAcquis;

    /**
     * Get the rr acquis.
     *
     * @return float Returns the rr acquis.
     */
    public function getRrAcquis() {
        return $this->rrAcquis;
    }

    /**
     * Set the rr acquis.
     *
     * @param float $rrAcquis The rr acquis.
     */
    public function setRrAcquis($rrAcquis) {
        $this->rrAcquis = $rrAcquis;
        return $this;
    }
}
