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
 * Vrp multicarte trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolVrpMulticarteTrait {

    /**
     * Vrp multicarte.
     *
     * @var bool
     */
    private $vrpMulticarte;

    /**
     * Get the vrp multicarte.
     *
     * @return bool Returns the vrp multicarte.
     */
    public function getVrpMulticarte() {
        return $this->vrpMulticarte;
    }

    /**
     * Set the vrp multicarte.
     *
     * @param bool $vrpMulticarte The vrp multicarte.
     */
    public function setVrpMulticarte($vrpMulticarte) {
        $this->vrpMulticarte = $vrpMulticarte;
        return $this;
    }
}
