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
 * Tvada trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTvadaTrait {

    /**
     * Tvada.
     *
     * @var float
     */
    private $tvada;

    /**
     * Get the tvada.
     *
     * @return float Returns the tvada.
     */
    public function getTvada() {
        return $this->tvada;
    }

    /**
     * Set the tvada.
     *
     * @param float $tvada The tvada.
     */
    public function setTvada($tvada) {
        $this->tvada = $tvada;
        return $this;
    }
}
