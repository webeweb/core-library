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
 * Disponible trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolDisponibleTrait {

    /**
     * Disponible.
     *
     * @var bool
     */
    private $disponible;

    /**
     * Get the disponible.
     *
     * @return bool Returns the disponible.
     */
    public function getDisponible() {
        return $this->disponible;
    }

    /**
     * Set the disponible.
     *
     * @param bool $disponible The disponible.
     */
    public function setDisponible($disponible) {
        $this->disponible = $disponible;
        return $this;
    }
}
