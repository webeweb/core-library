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
 * Gestion coeff grille trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolGestionCoeffGrilleTrait {

    /**
     * Gestion coeff grille.
     *
     * @var bool
     */
    private $gestionCoeffGrille;

    /**
     * Get the gestion coeff grille.
     *
     * @return bool Returns the gestion coeff grille.
     */
    public function getGestionCoeffGrille() {
        return $this->gestionCoeffGrille;
    }

    /**
     * Set the gestion coeff grille.
     *
     * @param bool $gestionCoeffGrille The gestion coeff grille.
     */
    public function setGestionCoeffGrille($gestionCoeffGrille) {
        $this->gestionCoeffGrille = $gestionCoeffGrille;
        return $this;
    }
}
