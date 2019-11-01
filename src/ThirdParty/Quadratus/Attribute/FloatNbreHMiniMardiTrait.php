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
 * Nbre h mini mardi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbreHMiniMardiTrait {

    /**
     * Nbre h mini mardi.
     *
     * @var float
     */
    private $nbreHMiniMardi;

    /**
     * Get the nbre h mini mardi.
     *
     * @return float Returns the nbre h mini mardi.
     */
    public function getNbreHMiniMardi() {
        return $this->nbreHMiniMardi;
    }

    /**
     * Set the nbre h mini mardi.
     *
     * @param float $nbreHMiniMardi The nbre h mini mardi.
     */
    public function setNbreHMiniMardi($nbreHMiniMardi) {
        $this->nbreHMiniMardi = $nbreHMiniMardi;
        return $this;
    }
}
