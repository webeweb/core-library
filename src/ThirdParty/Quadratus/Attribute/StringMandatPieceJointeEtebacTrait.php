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
 * Mandat piece jointe etebac trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMandatPieceJointeEtebacTrait {

    /**
     * Mandat piece jointe etebac.
     *
     * @var string
     */
    private $mandatPieceJointeEtebac;

    /**
     * Get the mandat piece jointe etebac.
     *
     * @return string Returns the mandat piece jointe etebac.
     */
    public function getMandatPieceJointeEtebac() {
        return $this->mandatPieceJointeEtebac;
    }

    /**
     * Set the mandat piece jointe etebac.
     *
     * @param string $mandatPieceJointeEtebac The mandat piece jointe etebac.
     */
    public function setMandatPieceJointeEtebac($mandatPieceJointeEtebac) {
        $this->mandatPieceJointeEtebac = $mandatPieceJointeEtebac;
        return $this;
    }
}
