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
 * Heures rc acquises trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatHeuresRcAcquisesTrait {

    /**
     * Heures rc acquises.
     *
     * @var float
     */
    private $heuresRcAcquises;

    /**
     * Get the heures rc acquises.
     *
     * @return float Returns the heures rc acquises.
     */
    public function getHeuresRcAcquises() {
        return $this->heuresRcAcquises;
    }

    /**
     * Set the heures rc acquises.
     *
     * @param float $heuresRcAcquises The heures rc acquises.
     */
    public function setHeuresRcAcquises($heuresRcAcquises) {
        $this->heuresRcAcquises = $heuresRcAcquises;
        return $this;
    }
}
