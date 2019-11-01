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
 * Prix unitaire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPrixUnitaireTrait {

    /**
     * Prix unitaire.
     *
     * @var float
     */
    private $prixUnitaire;

    /**
     * Get the prix unitaire.
     *
     * @return float Returns the prix unitaire.
     */
    public function getPrixUnitaire() {
        return $this->prixUnitaire;
    }

    /**
     * Set the prix unitaire.
     *
     * @param float $prixUnitaire The prix unitaire.
     */
    public function setPrixUnitaire($prixUnitaire) {
        $this->prixUnitaire = $prixUnitaire;
        return $this;
    }
}
