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
 * Num lot ecrit trans baux trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNumLotEcritTransBauxTrait {

    /**
     * Num lot ecrit trans baux.
     *
     * @var int
     */
    private $numLotEcritTransBaux;

    /**
     * Get the num lot ecrit trans baux.
     *
     * @return int Returns the num lot ecrit trans baux.
     */
    public function getNumLotEcritTransBaux() {
        return $this->numLotEcritTransBaux;
    }

    /**
     * Set the num lot ecrit trans baux.
     *
     * @param int $numLotEcritTransBaux The num lot ecrit trans baux.
     */
    public function setNumLotEcritTransBaux($numLotEcritTransBaux) {
        $this->numLotEcritTransBaux = $numLotEcritTransBaux;
        return $this;
    }
}
