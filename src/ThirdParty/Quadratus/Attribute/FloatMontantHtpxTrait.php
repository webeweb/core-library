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
 * Montant htpx trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontantHtpxTrait {

    /**
     * Montant htpx.
     *
     * @var float
     */
    private $montantHtpx;

    /**
     * Get the montant htpx.
     *
     * @return float Returns the montant htpx.
     */
    public function getMontantHtpx() {
        return $this->montantHtpx;
    }

    /**
     * Set the montant htpx.
     *
     * @param float $montantHtpx The montant htpx.
     */
    public function setMontantHtpx($montantHtpx) {
        $this->montantHtpx = $montantHtpx;
        return $this;
    }
}
