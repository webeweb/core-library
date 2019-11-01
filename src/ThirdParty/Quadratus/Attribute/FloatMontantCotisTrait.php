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
 * Montant cotis trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontantCotisTrait {

    /**
     * Montant cotis.
     *
     * @var float
     */
    private $montantCotis;

    /**
     * Get the montant cotis.
     *
     * @return float Returns the montant cotis.
     */
    public function getMontantCotis() {
        return $this->montantCotis;
    }

    /**
     * Set the montant cotis.
     *
     * @param float $montantCotis The montant cotis.
     */
    public function setMontantCotis($montantCotis) {
        $this->montantCotis = $montantCotis;
        return $this;
    }
}
