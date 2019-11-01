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
 * Quantite heure trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatQuantiteHeureTrait {

    /**
     * Quantite heure.
     *
     * @var float
     */
    private $quantiteHeure;

    /**
     * Get the quantite heure.
     *
     * @return float Returns the quantite heure.
     */
    public function getQuantiteHeure() {
        return $this->quantiteHeure;
    }

    /**
     * Set the quantite heure.
     *
     * @param float $quantiteHeure The quantite heure.
     */
    public function setQuantiteHeure($quantiteHeure) {
        $this->quantiteHeure = $quantiteHeure;
        return $this;
    }
}
