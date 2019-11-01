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
 * Nbr ecritures recettes trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbrEcrituresRecettesTrait {

    /**
     * Nbr ecritures recettes.
     *
     * @var float
     */
    private $nbrEcrituresRecettes;

    /**
     * Get the nbr ecritures recettes.
     *
     * @return float Returns the nbr ecritures recettes.
     */
    public function getNbrEcrituresRecettes() {
        return $this->nbrEcrituresRecettes;
    }

    /**
     * Set the nbr ecritures recettes.
     *
     * @param float $nbrEcrituresRecettes The nbr ecritures recettes.
     */
    public function setNbrEcrituresRecettes($nbrEcrituresRecettes) {
        $this->nbrEcrituresRecettes = $nbrEcrituresRecettes;
        return $this;
    }
}
