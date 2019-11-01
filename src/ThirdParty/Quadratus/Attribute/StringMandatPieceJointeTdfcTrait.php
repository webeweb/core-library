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
 * Mandat piece jointe tdfc trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMandatPieceJointeTdfcTrait {

    /**
     * Mandat piece jointe tdfc.
     *
     * @var string
     */
    private $mandatPieceJointeTdfc;

    /**
     * Get the mandat piece jointe tdfc.
     *
     * @return string Returns the mandat piece jointe tdfc.
     */
    public function getMandatPieceJointeTdfc() {
        return $this->mandatPieceJointeTdfc;
    }

    /**
     * Set the mandat piece jointe tdfc.
     *
     * @param string $mandatPieceJointeTdfc The mandat piece jointe tdfc.
     */
    public function setMandatPieceJointeTdfc($mandatPieceJointeTdfc) {
        $this->mandatPieceJointeTdfc = $mandatPieceJointeTdfc;
        return $this;
    }
}
