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
 * Gestion cp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringGestionCpTrait {

    /**
     * Gestion cp.
     *
     * @var string
     */
    private $gestionCp;

    /**
     * Get the gestion cp.
     *
     * @return string Returns the gestion cp.
     */
    public function getGestionCp() {
        return $this->gestionCp;
    }

    /**
     * Set the gestion cp.
     *
     * @param string $gestionCp The gestion cp.
     */
    public function setGestionCp($gestionCp) {
        $this->gestionCp = $gestionCp;
        return $this;
    }
}
