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
 * Nbre h mardi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbreHMardiTrait {

    /**
     * Nbre h mardi.
     *
     * @var float
     */
    private $nbreHMardi;

    /**
     * Get the nbre h mardi.
     *
     * @return float Returns the nbre h mardi.
     */
    public function getNbreHMardi() {
        return $this->nbreHMardi;
    }

    /**
     * Set the nbre h mardi.
     *
     * @param float $nbreHMardi The nbre h mardi.
     */
    public function setNbreHMardi($nbreHMardi) {
        $this->nbreHMardi = $nbreHMardi;
        return $this;
    }
}
