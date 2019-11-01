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
 * Montant b plaf trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontantBPlafTrait {

    /**
     * Montant b plaf.
     *
     * @var float
     */
    private $montantBPlaf;

    /**
     * Get the montant b plaf.
     *
     * @return float Returns the montant b plaf.
     */
    public function getMontantBPlaf() {
        return $this->montantBPlaf;
    }

    /**
     * Set the montant b plaf.
     *
     * @param float $montantBPlaf The montant b plaf.
     */
    public function setMontantBPlaf($montantBPlaf) {
        $this->montantBPlaf = $montantBPlaf;
        return $this;
    }
}
