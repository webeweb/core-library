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
 * Piece jointe trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringPieceJointeTrait {

    /**
     * Piece jointe.
     *
     * @var string
     */
    private $pieceJointe;

    /**
     * Get the piece jointe.
     *
     * @return string Returns the piece jointe.
     */
    public function getPieceJointe() {
        return $this->pieceJointe;
    }

    /**
     * Set the piece jointe.
     *
     * @param string $pieceJointe The piece jointe.
     */
    public function setPieceJointe($pieceJointe) {
        $this->pieceJointe = $pieceJointe;
        return $this;
    }
}
