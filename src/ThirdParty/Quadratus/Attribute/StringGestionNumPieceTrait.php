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
 * Gestion num piece trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringGestionNumPieceTrait {

    /**
     * Gestion num piece.
     *
     * @var string
     */
    private $gestionNumPiece;

    /**
     * Get the gestion num piece.
     *
     * @return string Returns the gestion num piece.
     */
    public function getGestionNumPiece() {
        return $this->gestionNumPiece;
    }

    /**
     * Set the gestion num piece.
     *
     * @param string $gestionNumPiece The gestion num piece.
     */
    public function setGestionNumPiece($gestionNumPiece) {
        $this->gestionNumPiece = $gestionNumPiece;
        return $this;
    }
}
