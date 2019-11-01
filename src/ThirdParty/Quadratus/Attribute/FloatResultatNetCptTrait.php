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
 * Resultat net cpt trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatResultatNetCptTrait {

    /**
     * Resultat net cpt.
     *
     * @var float
     */
    private $resultatNetCpt;

    /**
     * Get the resultat net cpt.
     *
     * @return float Returns the resultat net cpt.
     */
    public function getResultatNetCpt() {
        return $this->resultatNetCpt;
    }

    /**
     * Set the resultat net cpt.
     *
     * @param float $resultatNetCpt The resultat net cpt.
     */
    public function setResultatNetCpt($resultatNetCpt) {
        $this->resultatNetCpt = $resultatNetCpt;
        return $this;
    }
}
