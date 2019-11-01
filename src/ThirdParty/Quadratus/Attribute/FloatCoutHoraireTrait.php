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
 * Cout horaire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCoutHoraireTrait {

    /**
     * Cout horaire.
     *
     * @var float
     */
    private $coutHoraire;

    /**
     * Get the cout horaire.
     *
     * @return float Returns the cout horaire.
     */
    public function getCoutHoraire() {
        return $this->coutHoraire;
    }

    /**
     * Set the cout horaire.
     *
     * @param float $coutHoraire The cout horaire.
     */
    public function setCoutHoraire($coutHoraire) {
        $this->coutHoraire = $coutHoraire;
        return $this;
    }
}
