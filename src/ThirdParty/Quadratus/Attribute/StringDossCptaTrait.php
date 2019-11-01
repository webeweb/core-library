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
 * Doss cpta trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDossCptaTrait {

    /**
     * Doss cpta.
     *
     * @var string
     */
    private $dossCpta;

    /**
     * Get the doss cpta.
     *
     * @return string Returns the doss cpta.
     */
    public function getDossCpta() {
        return $this->dossCpta;
    }

    /**
     * Set the doss cpta.
     *
     * @param string $dossCpta The doss cpta.
     */
    public function setDossCpta($dossCpta) {
        $this->dossCpta = $dossCpta;
        return $this;
    }
}
