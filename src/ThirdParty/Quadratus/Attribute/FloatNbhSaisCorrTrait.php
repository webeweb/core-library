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
 * Nbh sais corr trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbhSaisCorrTrait {

    /**
     * Nbh sais corr.
     *
     * @var float
     */
    private $nbhSaisCorr;

    /**
     * Get the nbh sais corr.
     *
     * @return float Returns the nbh sais corr.
     */
    public function getNbhSaisCorr() {
        return $this->nbhSaisCorr;
    }

    /**
     * Set the nbh sais corr.
     *
     * @param float $nbhSaisCorr The nbh sais corr.
     */
    public function setNbhSaisCorr($nbhSaisCorr) {
        $this->nbhSaisCorr = $nbhSaisCorr;
        return $this;
    }
}
