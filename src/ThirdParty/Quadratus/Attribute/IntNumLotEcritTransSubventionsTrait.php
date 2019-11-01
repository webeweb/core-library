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
 * Num lot ecrit trans subventions trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNumLotEcritTransSubventionsTrait {

    /**
     * Num lot ecrit trans subventions.
     *
     * @var int
     */
    private $numLotEcritTransSubventions;

    /**
     * Get the num lot ecrit trans subventions.
     *
     * @return int Returns the num lot ecrit trans subventions.
     */
    public function getNumLotEcritTransSubventions() {
        return $this->numLotEcritTransSubventions;
    }

    /**
     * Set the num lot ecrit trans subventions.
     *
     * @param int $numLotEcritTransSubventions The num lot ecrit trans subventions.
     */
    public function setNumLotEcritTransSubventions($numLotEcritTransSubventions) {
        $this->numLotEcritTransSubventions = $numLotEcritTransSubventions;
        return $this;
    }
}
