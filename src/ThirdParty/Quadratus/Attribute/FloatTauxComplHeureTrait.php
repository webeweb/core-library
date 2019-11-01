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
 * Taux compl heure trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTauxComplHeureTrait {

    /**
     * Taux compl heure.
     *
     * @var float
     */
    private $tauxComplHeure;

    /**
     * Get the taux compl heure.
     *
     * @return float Returns the taux compl heure.
     */
    public function getTauxComplHeure() {
        return $this->tauxComplHeure;
    }

    /**
     * Set the taux compl heure.
     *
     * @param float $tauxComplHeure The taux compl heure.
     */
    public function setTauxComplHeure($tauxComplHeure) {
        $this->tauxComplHeure = $tauxComplHeure;
        return $this;
    }
}
