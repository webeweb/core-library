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
 * Mtt annee trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMttAnneeTrait {

    /**
     * Mtt annee.
     *
     * @var float
     */
    private $mttAnnee;

    /**
     * Get the mtt annee.
     *
     * @return float Returns the mtt annee.
     */
    public function getMttAnnee() {
        return $this->mttAnnee;
    }

    /**
     * Set the mtt annee.
     *
     * @param float $mttAnnee The mtt annee.
     */
    public function setMttAnnee($mttAnnee) {
        $this->mttAnnee = $mttAnnee;
        return $this;
    }
}
