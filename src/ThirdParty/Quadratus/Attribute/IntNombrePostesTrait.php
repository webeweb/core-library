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
 * Nombre postes trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNombrePostesTrait {

    /**
     * Nombre postes.
     *
     * @var int
     */
    private $nombrePostes;

    /**
     * Get the nombre postes.
     *
     * @return int Returns the nombre postes.
     */
    public function getNombrePostes() {
        return $this->nombrePostes;
    }

    /**
     * Set the nombre postes.
     *
     * @param int $nombrePostes The nombre postes.
     */
    public function setNombrePostes($nombrePostes) {
        $this->nombrePostes = $nombrePostes;
        return $this;
    }
}
