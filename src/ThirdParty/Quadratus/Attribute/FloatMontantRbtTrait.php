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
 * Montant rbt trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontantRbtTrait {

    /**
     * Montant rbt.
     *
     * @var float
     */
    private $montantRbt;

    /**
     * Get the montant rbt.
     *
     * @return float Returns the montant rbt.
     */
    public function getMontantRbt() {
        return $this->montantRbt;
    }

    /**
     * Set the montant rbt.
     *
     * @param float $montantRbt The montant rbt.
     */
    public function setMontantRbt($montantRbt) {
        $this->montantRbt = $montantRbt;
        return $this;
    }
}
