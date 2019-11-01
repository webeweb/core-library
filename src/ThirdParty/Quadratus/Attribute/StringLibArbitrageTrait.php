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
 * Lib arbitrage trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibArbitrageTrait {

    /**
     * Lib arbitrage.
     *
     * @var string
     */
    private $libArbitrage;

    /**
     * Get the lib arbitrage.
     *
     * @return string Returns the lib arbitrage.
     */
    public function getLibArbitrage() {
        return $this->libArbitrage;
    }

    /**
     * Set the lib arbitrage.
     *
     * @param string $libArbitrage The lib arbitrage.
     */
    public function setLibArbitrage($libArbitrage) {
        $this->libArbitrage = $libArbitrage;
        return $this;
    }
}
