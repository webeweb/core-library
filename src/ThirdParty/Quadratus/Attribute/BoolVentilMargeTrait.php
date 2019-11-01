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
 * Ventil marge trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolVentilMargeTrait {

    /**
     * Ventil marge.
     *
     * @var bool
     */
    private $ventilMarge;

    /**
     * Get the ventil marge.
     *
     * @return bool Returns the ventil marge.
     */
    public function getVentilMarge() {
        return $this->ventilMarge;
    }

    /**
     * Set the ventil marge.
     *
     * @param bool $ventilMarge The ventil marge.
     */
    public function setVentilMarge($ventilMarge) {
        $this->ventilMarge = $ventilMarge;
        return $this;
    }
}
