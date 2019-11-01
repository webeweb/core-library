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
 * Num doss cpta trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumDossCptaTrait {

    /**
     * Num doss cpta.
     *
     * @var string
     */
    private $numDossCpta;

    /**
     * Get the num doss cpta.
     *
     * @return string Returns the num doss cpta.
     */
    public function getNumDossCpta() {
        return $this->numDossCpta;
    }

    /**
     * Set the num doss cpta.
     *
     * @param string $numDossCpta The num doss cpta.
     */
    public function setNumDossCpta($numDossCpta) {
        $this->numDossCpta = $numDossCpta;
        return $this;
    }
}
