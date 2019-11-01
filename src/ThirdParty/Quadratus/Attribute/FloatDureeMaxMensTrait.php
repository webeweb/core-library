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
 * Duree max mens trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatDureeMaxMensTrait {

    /**
     * Duree max mens.
     *
     * @var float
     */
    private $dureeMaxMens;

    /**
     * Get the duree max mens.
     *
     * @return float Returns the duree max mens.
     */
    public function getDureeMaxMens() {
        return $this->dureeMaxMens;
    }

    /**
     * Set the duree max mens.
     *
     * @param float $dureeMaxMens The duree max mens.
     */
    public function setDureeMaxMens($dureeMaxMens) {
        $this->dureeMaxMens = $dureeMaxMens;
        return $this;
    }
}
