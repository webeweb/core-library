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
 * Malus trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMalusTrait {

    /**
     * Malus.
     *
     * @var float
     */
    private $malus;

    /**
     * Get the malus.
     *
     * @return float Returns the malus.
     */
    public function getMalus() {
        return $this->malus;
    }

    /**
     * Set the malus.
     *
     * @param float $malus The malus.
     */
    public function setMalus($malus) {
        $this->malus = $malus;
        return $this;
    }
}
