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
 * Mandat piece jointe pedi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMandatPieceJointePediTrait {

    /**
     * Mandat piece jointe pedi.
     *
     * @var string
     */
    private $mandatPieceJointePedi;

    /**
     * Get the mandat piece jointe pedi.
     *
     * @return string Returns the mandat piece jointe pedi.
     */
    public function getMandatPieceJointePedi() {
        return $this->mandatPieceJointePedi;
    }

    /**
     * Set the mandat piece jointe pedi.
     *
     * @param string $mandatPieceJointePedi The mandat piece jointe pedi.
     */
    public function setMandatPieceJointePedi($mandatPieceJointePedi) {
        $this->mandatPieceJointePedi = $mandatPieceJointePedi;
        return $this;
    }
}
