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
 * Fct saisie ventes trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolFctSaisieVentesTrait {

    /**
     * Fct saisie ventes.
     *
     * @var bool
     */
    private $fctSaisieVentes;

    /**
     * Get the fct saisie ventes.
     *
     * @return bool Returns the fct saisie ventes.
     */
    public function getFctSaisieVentes() {
        return $this->fctSaisieVentes;
    }

    /**
     * Set the fct saisie ventes.
     *
     * @param bool $fctSaisieVentes The fct saisie ventes.
     */
    public function setFctSaisieVentes($fctSaisieVentes) {
        $this->fctSaisieVentes = $fctSaisieVentes;
        return $this;
    }
}
