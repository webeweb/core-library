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
 * R recup acquis trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatRRecupAcquisTrait {

    /**
     * R recup acquis.
     *
     * @var float
     */
    private $rRecupAcquis;

    /**
     * Get the r recup acquis.
     *
     * @return float Returns the r recup acquis.
     */
    public function getRRecupAcquis() {
        return $this->rRecupAcquis;
    }

    /**
     * Set the r recup acquis.
     *
     * @param float $rRecupAcquis The r recup acquis.
     */
    public function setRRecupAcquis($rRecupAcquis) {
        $this->rRecupAcquis = $rRecupAcquis;
        return $this;
    }
}
