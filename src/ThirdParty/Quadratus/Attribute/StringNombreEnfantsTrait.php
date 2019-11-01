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
 * Nombre enfants trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNombreEnfantsTrait {

    /**
     * Nombre enfants.
     *
     * @var string
     */
    private $nombreEnfants;

    /**
     * Get the nombre enfants.
     *
     * @return string Returns the nombre enfants.
     */
    public function getNombreEnfants() {
        return $this->nombreEnfants;
    }

    /**
     * Set the nombre enfants.
     *
     * @param string $nombreEnfants The nombre enfants.
     */
    public function setNombreEnfants($nombreEnfants) {
        $this->nombreEnfants = $nombreEnfants;
        return $this;
    }
}
