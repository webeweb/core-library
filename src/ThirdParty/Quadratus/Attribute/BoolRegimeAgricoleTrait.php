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
 * Regime agricole trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolRegimeAgricoleTrait {

    /**
     * Regime agricole.
     *
     * @var bool
     */
    private $regimeAgricole;

    /**
     * Get the regime agricole.
     *
     * @return bool Returns the regime agricole.
     */
    public function getRegimeAgricole() {
        return $this->regimeAgricole;
    }

    /**
     * Set the regime agricole.
     *
     * @param bool $regimeAgricole The regime agricole.
     */
    public function setRegimeAgricole($regimeAgricole) {
        $this->regimeAgricole = $regimeAgricole;
        return $this;
    }
}
