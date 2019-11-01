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
 * Gestion hstepa trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringGestionHstepaTrait {

    /**
     * Gestion hstepa.
     *
     * @var string
     */
    private $gestionHstepa;

    /**
     * Get the gestion hstepa.
     *
     * @return string Returns the gestion hstepa.
     */
    public function getGestionHstepa() {
        return $this->gestionHstepa;
    }

    /**
     * Set the gestion hstepa.
     *
     * @param string $gestionHstepa The gestion hstepa.
     */
    public function setGestionHstepa($gestionHstepa) {
        $this->gestionHstepa = $gestionHstepa;
        return $this;
    }
}
