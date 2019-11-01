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
 * Nb femmes trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbFemmesTrait {

    /**
     * Nb femmes.
     *
     * @var float
     */
    private $nbFemmes;

    /**
     * Get the nb femmes.
     *
     * @return float Returns the nb femmes.
     */
    public function getNbFemmes() {
        return $this->nbFemmes;
    }

    /**
     * Set the nb femmes.
     *
     * @param float $nbFemmes The nb femmes.
     */
    public function setNbFemmes($nbFemmes) {
        $this->nbFemmes = $nbFemmes;
        return $this;
    }
}
