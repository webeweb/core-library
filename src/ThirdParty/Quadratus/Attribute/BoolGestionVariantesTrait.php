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
 * Gestion variantes trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolGestionVariantesTrait {

    /**
     * Gestion variantes.
     *
     * @var bool
     */
    private $gestionVariantes;

    /**
     * Get the gestion variantes.
     *
     * @return bool Returns the gestion variantes.
     */
    public function getGestionVariantes() {
        return $this->gestionVariantes;
    }

    /**
     * Set the gestion variantes.
     *
     * @param bool $gestionVariantes The gestion variantes.
     */
    public function setGestionVariantes($gestionVariantes) {
        $this->gestionVariantes = $gestionVariantes;
        return $this;
    }
}
