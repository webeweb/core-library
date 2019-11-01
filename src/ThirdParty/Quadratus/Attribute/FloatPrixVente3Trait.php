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
 * Prix vente3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPrixVente3Trait {

    /**
     * Prix vente3.
     *
     * @var float
     */
    private $prixVente3;

    /**
     * Get the prix vente3.
     *
     * @return float Returns the prix vente3.
     */
    public function getPrixVente3() {
        return $this->prixVente3;
    }

    /**
     * Set the prix vente3.
     *
     * @param float $prixVente3 The prix vente3.
     */
    public function setPrixVente3($prixVente3) {
        $this->prixVente3 = $prixVente3;
        return $this;
    }
}
