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
 * Piece interne trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntPieceInterneTrait {

    /**
     * Piece interne.
     *
     * @var int
     */
    private $pieceInterne;

    /**
     * Get the piece interne.
     *
     * @return int Returns the piece interne.
     */
    public function getPieceInterne() {
        return $this->pieceInterne;
    }

    /**
     * Set the piece interne.
     *
     * @param int $pieceInterne The piece interne.
     */
    public function setPieceInterne($pieceInterne) {
        $this->pieceInterne = $pieceInterne;
        return $this;
    }
}
