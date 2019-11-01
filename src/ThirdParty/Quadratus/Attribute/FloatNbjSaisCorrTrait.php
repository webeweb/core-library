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
 * Nbj sais corr trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbjSaisCorrTrait {

    /**
     * Nbj sais corr.
     *
     * @var float
     */
    private $nbjSaisCorr;

    /**
     * Get the nbj sais corr.
     *
     * @return float Returns the nbj sais corr.
     */
    public function getNbjSaisCorr() {
        return $this->nbjSaisCorr;
    }

    /**
     * Set the nbj sais corr.
     *
     * @param float $nbjSaisCorr The nbj sais corr.
     */
    public function setNbjSaisCorr($nbjSaisCorr) {
        $this->nbjSaisCorr = $nbjSaisCorr;
        return $this;
    }
}
