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
 * Num chrono trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNumChronoTrait {

    /**
     * Num chrono.
     *
     * @var int
     */
    private $numChrono;

    /**
     * Get the num chrono.
     *
     * @return int Returns the num chrono.
     */
    public function getNumChrono() {
        return $this->numChrono;
    }

    /**
     * Set the num chrono.
     *
     * @param int $numChrono The num chrono.
     */
    public function setNumChrono($numChrono) {
        $this->numChrono = $numChrono;
        return $this;
    }
}
