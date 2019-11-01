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
 * Prix vente1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPrixVente1Trait {

    /**
     * Prix vente1.
     *
     * @var float
     */
    private $prixVente1;

    /**
     * Get the prix vente1.
     *
     * @return float Returns the prix vente1.
     */
    public function getPrixVente1() {
        return $this->prixVente1;
    }

    /**
     * Set the prix vente1.
     *
     * @param float $prixVente1 The prix vente1.
     */
    public function setPrixVente1($prixVente1) {
        $this->prixVente1 = $prixVente1;
        return $this;
    }
}
