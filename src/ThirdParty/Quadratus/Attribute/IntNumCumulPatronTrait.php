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
 * Num cumul patron trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNumCumulPatronTrait {

    /**
     * Num cumul patron.
     *
     * @var int
     */
    private $numCumulPatron;

    /**
     * Get the num cumul patron.
     *
     * @return int Returns the num cumul patron.
     */
    public function getNumCumulPatron() {
        return $this->numCumulPatron;
    }

    /**
     * Set the num cumul patron.
     *
     * @param int $numCumulPatron The num cumul patron.
     */
    public function setNumCumulPatron($numCumulPatron) {
        $this->numCumulPatron = $numCumulPatron;
        return $this;
    }
}
