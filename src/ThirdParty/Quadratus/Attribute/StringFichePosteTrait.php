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
 * Fiche poste trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFichePosteTrait {

    /**
     * Fiche poste.
     *
     * @var string
     */
    private $fichePoste;

    /**
     * Get the fiche poste.
     *
     * @return string Returns the fiche poste.
     */
    public function getFichePoste() {
        return $this->fichePoste;
    }

    /**
     * Set the fiche poste.
     *
     * @param string $fichePoste The fiche poste.
     */
    public function setFichePoste($fichePoste) {
        $this->fichePoste = $fichePoste;
        return $this;
    }
}
