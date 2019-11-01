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
 * Montant global trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontantGlobalTrait {

    /**
     * Montant global.
     *
     * @var float
     */
    private $montantGlobal;

    /**
     * Get the montant global.
     *
     * @return float Returns the montant global.
     */
    public function getMontantGlobal() {
        return $this->montantGlobal;
    }

    /**
     * Set the montant global.
     *
     * @param float $montantGlobal The montant global.
     */
    public function setMontantGlobal($montantGlobal) {
        $this->montantGlobal = $montantGlobal;
        return $this;
    }
}
