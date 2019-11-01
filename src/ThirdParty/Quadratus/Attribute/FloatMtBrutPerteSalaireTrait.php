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
 * Mt brut perte salaire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMtBrutPerteSalaireTrait {

    /**
     * Mt brut perte salaire.
     *
     * @var float
     */
    private $mtBrutPerteSalaire;

    /**
     * Get the mt brut perte salaire.
     *
     * @return float Returns the mt brut perte salaire.
     */
    public function getMtBrutPerteSalaire() {
        return $this->mtBrutPerteSalaire;
    }

    /**
     * Set the mt brut perte salaire.
     *
     * @param float $mtBrutPerteSalaire The mt brut perte salaire.
     */
    public function setMtBrutPerteSalaire($mtBrutPerteSalaire) {
        $this->mtBrutPerteSalaire = $mtBrutPerteSalaire;
        return $this;
    }
}
