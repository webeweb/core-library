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
 * Cout moyen horaire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCoutMoyenHoraireTrait {

    /**
     * Cout moyen horaire.
     *
     * @var float
     */
    private $coutMoyenHoraire;

    /**
     * Get the cout moyen horaire.
     *
     * @return float Returns the cout moyen horaire.
     */
    public function getCoutMoyenHoraire() {
        return $this->coutMoyenHoraire;
    }

    /**
     * Set the cout moyen horaire.
     *
     * @param float $coutMoyenHoraire The cout moyen horaire.
     */
    public function setCoutMoyenHoraire($coutMoyenHoraire) {
        $this->coutMoyenHoraire = $coutMoyenHoraire;
        return $this;
    }
}
