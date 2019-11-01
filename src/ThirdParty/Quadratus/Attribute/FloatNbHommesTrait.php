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
 * Nb hommes trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHommesTrait {

    /**
     * Nb hommes.
     *
     * @var float
     */
    private $nbHommes;

    /**
     * Get the nb hommes.
     *
     * @return float Returns the nb hommes.
     */
    public function getNbHommes() {
        return $this->nbHommes;
    }

    /**
     * Set the nb hommes.
     *
     * @param float $nbHommes The nb hommes.
     */
    public function setNbHommes($nbHommes) {
        $this->nbHommes = $nbHommes;
        return $this;
    }
}
