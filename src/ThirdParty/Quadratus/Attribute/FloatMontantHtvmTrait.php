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
 * Montant htvm trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontantHtvmTrait {

    /**
     * Montant htvm.
     *
     * @var float
     */
    private $montantHtvm;

    /**
     * Get the montant htvm.
     *
     * @return float Returns the montant htvm.
     */
    public function getMontantHtvm() {
        return $this->montantHtvm;
    }

    /**
     * Set the montant htvm.
     *
     * @param float $montantHtvm The montant htvm.
     */
    public function setMontantHtvm($montantHtvm) {
        $this->montantHtvm = $montantHtvm;
        return $this;
    }
}
