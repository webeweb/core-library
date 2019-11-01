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
 * Nombre actions trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNombreActionsTrait {

    /**
     * Nombre actions.
     *
     * @var int
     */
    private $nombreActions;

    /**
     * Get the nombre actions.
     *
     * @return int Returns the nombre actions.
     */
    public function getNombreActions() {
        return $this->nombreActions;
    }

    /**
     * Set the nombre actions.
     *
     * @param int $nombreActions The nombre actions.
     */
    public function setNombreActions($nombreActions) {
        $this->nombreActions = $nombreActions;
        return $this;
    }
}
