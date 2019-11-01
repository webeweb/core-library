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
 * Ventilations communes trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolVentilationsCommunesTrait {

    /**
     * Ventilations communes.
     *
     * @var bool
     */
    private $ventilationsCommunes;

    /**
     * Get the ventilations communes.
     *
     * @return bool Returns the ventilations communes.
     */
    public function getVentilationsCommunes() {
        return $this->ventilationsCommunes;
    }

    /**
     * Set the ventilations communes.
     *
     * @param bool $ventilationsCommunes The ventilations communes.
     */
    public function setVentilationsCommunes($ventilationsCommunes) {
        $this->ventilationsCommunes = $ventilationsCommunes;
        return $this;
    }
}
