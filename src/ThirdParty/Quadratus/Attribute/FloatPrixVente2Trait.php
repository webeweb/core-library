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
 * Prix vente2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPrixVente2Trait {

    /**
     * Prix vente2.
     *
     * @var float
     */
    private $prixVente2;

    /**
     * Get the prix vente2.
     *
     * @return float Returns the prix vente2.
     */
    public function getPrixVente2() {
        return $this->prixVente2;
    }

    /**
     * Set the prix vente2.
     *
     * @param float $prixVente2 The prix vente2.
     */
    public function setPrixVente2($prixVente2) {
        $this->prixVente2 = $prixVente2;
        return $this;
    }
}
