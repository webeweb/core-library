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
 * Num lot ecrit trans assurance trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNumLotEcritTransAssuranceTrait {

    /**
     * Num lot ecrit trans assurance.
     *
     * @var int
     */
    private $numLotEcritTransAssurance;

    /**
     * Get the num lot ecrit trans assurance.
     *
     * @return int Returns the num lot ecrit trans assurance.
     */
    public function getNumLotEcritTransAssurance() {
        return $this->numLotEcritTransAssurance;
    }

    /**
     * Set the num lot ecrit trans assurance.
     *
     * @param int $numLotEcritTransAssurance The num lot ecrit trans assurance.
     */
    public function setNumLotEcritTransAssurance($numLotEcritTransAssurance) {
        $this->numLotEcritTransAssurance = $numLotEcritTransAssurance;
        return $this;
    }
}
