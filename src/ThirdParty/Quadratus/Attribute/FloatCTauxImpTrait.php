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
 * C taux imp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCTauxImpTrait {

    /**
     * C taux imp.
     *
     * @var float
     */
    private $cTauxImp;

    /**
     * Get the c taux imp.
     *
     * @return float Returns the c taux imp.
     */
    public function getCTauxImp() {
        return $this->cTauxImp;
    }

    /**
     * Set the c taux imp.
     *
     * @param float $cTauxImp The c taux imp.
     */
    public function setCTauxImp($cTauxImp) {
        $this->cTauxImp = $cTauxImp;
        return $this;
    }
}
