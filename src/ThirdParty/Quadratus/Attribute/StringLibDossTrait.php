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
 * Lib doss trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibDossTrait {

    /**
     * Lib doss.
     *
     * @var string
     */
    private $libDoss;

    /**
     * Get the lib doss.
     *
     * @return string Returns the lib doss.
     */
    public function getLibDoss() {
        return $this->libDoss;
    }

    /**
     * Set the lib doss.
     *
     * @param string $libDoss The lib doss.
     */
    public function setLibDoss($libDoss) {
        $this->libDoss = $libDoss;
        return $this;
    }
}
