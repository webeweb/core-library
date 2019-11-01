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
 * Mandat piece jointe req trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMandatPieceJointeReqTrait {

    /**
     * Mandat piece jointe req.
     *
     * @var string
     */
    private $mandatPieceJointeReq;

    /**
     * Get the mandat piece jointe req.
     *
     * @return string Returns the mandat piece jointe req.
     */
    public function getMandatPieceJointeReq() {
        return $this->mandatPieceJointeReq;
    }

    /**
     * Set the mandat piece jointe req.
     *
     * @param string $mandatPieceJointeReq The mandat piece jointe req.
     */
    public function setMandatPieceJointeReq($mandatPieceJointeReq) {
        $this->mandatPieceJointeReq = $mandatPieceJointeReq;
        return $this;
    }
}
