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
 * Chiffre affaire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatChiffreAffaireTrait {

    /**
     * Chiffre affaire.
     *
     * @var float
     */
    private $chiffreAffaire;

    /**
     * Get the chiffre affaire.
     *
     * @return float Returns the chiffre affaire.
     */
    public function getChiffreAffaire() {
        return $this->chiffreAffaire;
    }

    /**
     * Set the chiffre affaire.
     *
     * @param float $chiffreAffaire The chiffre affaire.
     */
    public function setChiffreAffaire($chiffreAffaire) {
        $this->chiffreAffaire = $chiffreAffaire;
        return $this;
    }
}
