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
 * Nombre employes trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNombreEmployesTrait {

    /**
     * Nombre employes.
     *
     * @var int
     */
    private $nombreEmployes;

    /**
     * Get the nombre employes.
     *
     * @return int Returns the nombre employes.
     */
    public function getNombreEmployes() {
        return $this->nombreEmployes;
    }

    /**
     * Set the nombre employes.
     *
     * @param int $nombreEmployes The nombre employes.
     */
    public function setNombreEmployes($nombreEmployes) {
        $this->nombreEmployes = $nombreEmployes;
        return $this;
    }
}
