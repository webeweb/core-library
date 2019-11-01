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
 * Nom piece trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNomPieceTrait {

    /**
     * Nom piece.
     *
     * @var string
     */
    private $nomPiece;

    /**
     * Get the nom piece.
     *
     * @return string Returns the nom piece.
     */
    public function getNomPiece() {
        return $this->nomPiece;
    }

    /**
     * Set the nom piece.
     *
     * @param string $nomPiece The nom piece.
     */
    public function setNomPiece($nomPiece) {
        $this->nomPiece = $nomPiece;
        return $this;
    }
}
