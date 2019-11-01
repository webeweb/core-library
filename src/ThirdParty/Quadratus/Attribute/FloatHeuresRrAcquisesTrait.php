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
 * Heures rr acquises trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatHeuresRrAcquisesTrait {

    /**
     * Heures rr acquises.
     *
     * @var float
     */
    private $heuresRrAcquises;

    /**
     * Get the heures rr acquises.
     *
     * @return float Returns the heures rr acquises.
     */
    public function getHeuresRrAcquises() {
        return $this->heuresRrAcquises;
    }

    /**
     * Set the heures rr acquises.
     *
     * @param float $heuresRrAcquises The heures rr acquises.
     */
    public function setHeuresRrAcquises($heuresRrAcquises) {
        $this->heuresRrAcquises = $heuresRrAcquises;
        return $this;
    }
}
