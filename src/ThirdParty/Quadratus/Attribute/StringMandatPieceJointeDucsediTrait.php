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
 * Mandat piece jointe ducsedi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMandatPieceJointeDucsediTrait {

    /**
     * Mandat piece jointe ducsedi.
     *
     * @var string
     */
    private $mandatPieceJointeDucsedi;

    /**
     * Get the mandat piece jointe ducsedi.
     *
     * @return string Returns the mandat piece jointe ducsedi.
     */
    public function getMandatPieceJointeDucsedi() {
        return $this->mandatPieceJointeDucsedi;
    }

    /**
     * Set the mandat piece jointe ducsedi.
     *
     * @param string $mandatPieceJointeDucsedi The mandat piece jointe ducsedi.
     */
    public function setMandatPieceJointeDucsedi($mandatPieceJointeDucsedi) {
        $this->mandatPieceJointeDucsedi = $mandatPieceJointeDucsedi;
        return $this;
    }
}
