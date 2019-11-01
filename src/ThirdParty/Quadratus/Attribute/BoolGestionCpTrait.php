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
trait BoolGestionCpTrait {

    /**
     * Gestion cp.
     *
     * @var bool
     */
    private $gestionCp;

    /**
     * Get the gestion cp.
     *
     * @return bool Returns the gestion cp.
     */
    public function getGestionCp() {
        return $this->gestionCp;
    }

    /**
     * Set the gestion cp.
     *
     * @param bool $gestionCp The gestion cp.
     */
    public function setGestionCp($gestionCp) {
        $this->gestionCp = $gestionCp;
        return $this;
    }
}
