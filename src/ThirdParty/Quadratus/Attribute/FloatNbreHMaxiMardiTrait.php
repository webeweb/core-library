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
 * Nbre h maxi mardi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbreHMaxiMardiTrait {

    /**
     * Nbre h maxi mardi.
     *
     * @var float
     */
    private $nbreHMaxiMardi;

    /**
     * Get the nbre h maxi mardi.
     *
     * @return float Returns the nbre h maxi mardi.
     */
    public function getNbreHMaxiMardi() {
        return $this->nbreHMaxiMardi;
    }

    /**
     * Set the nbre h maxi mardi.
     *
     * @param float $nbreHMaxiMardi The nbre h maxi mardi.
     */
    public function setNbreHMaxiMardi($nbreHMaxiMardi) {
        $this->nbreHMaxiMardi = $nbreHMaxiMardi;
        return $this;
    }
}
