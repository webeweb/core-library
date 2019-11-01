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
 * Mandat piece jointe editva trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMandatPieceJointeEditvaTrait {

    /**
     * Mandat piece jointe editva.
     *
     * @var string
     */
    private $mandatPieceJointeEditva;

    /**
     * Get the mandat piece jointe editva.
     *
     * @return string Returns the mandat piece jointe editva.
     */
    public function getMandatPieceJointeEditva() {
        return $this->mandatPieceJointeEditva;
    }

    /**
     * Set the mandat piece jointe editva.
     *
     * @param string $mandatPieceJointeEditva The mandat piece jointe editva.
     */
    public function setMandatPieceJointeEditva($mandatPieceJointeEditva) {
        $this->mandatPieceJointeEditva = $mandatPieceJointeEditva;
        return $this;
    }
}
