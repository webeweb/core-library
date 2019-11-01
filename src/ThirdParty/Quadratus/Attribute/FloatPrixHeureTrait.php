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
 * Prix heure trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPrixHeureTrait {

    /**
     * Prix heure.
     *
     * @var float
     */
    private $prixHeure;

    /**
     * Get the prix heure.
     *
     * @return float Returns the prix heure.
     */
    public function getPrixHeure() {
        return $this->prixHeure;
    }

    /**
     * Set the prix heure.
     *
     * @param float $prixHeure The prix heure.
     */
    public function setPrixHeure($prixHeure) {
        $this->prixHeure = $prixHeure;
        return $this;
    }
}
