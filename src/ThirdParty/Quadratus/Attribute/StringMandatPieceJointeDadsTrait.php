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
 * Mandat piece jointe dads trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMandatPieceJointeDadsTrait {

    /**
     * Mandat piece jointe dads.
     *
     * @var string
     */
    private $mandatPieceJointeDads;

    /**
     * Get the mandat piece jointe dads.
     *
     * @return string Returns the mandat piece jointe dads.
     */
    public function getMandatPieceJointeDads() {
        return $this->mandatPieceJointeDads;
    }

    /**
     * Set the mandat piece jointe dads.
     *
     * @param string $mandatPieceJointeDads The mandat piece jointe dads.
     */
    public function setMandatPieceJointeDads($mandatPieceJointeDads) {
        $this->mandatPieceJointeDads = $mandatPieceJointeDads;
        return $this;
    }
}
