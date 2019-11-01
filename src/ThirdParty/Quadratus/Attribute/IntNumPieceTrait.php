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
 * Num piece trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNumPieceTrait {

    /**
     * Num piece.
     *
     * @var int
     */
    private $numPiece;

    /**
     * Get the num piece.
     *
     * @return int Returns the num piece.
     */
    public function getNumPiece() {
        return $this->numPiece;
    }

    /**
     * Set the num piece.
     *
     * @param int $numPiece The num piece.
     */
    public function setNumPiece($numPiece) {
        $this->numPiece = $numPiece;
        return $this;
    }
}
