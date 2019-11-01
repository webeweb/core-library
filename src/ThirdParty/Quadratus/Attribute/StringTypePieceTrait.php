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
 * Type piece trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypePieceTrait {

    /**
     * Type piece.
     *
     * @var string
     */
    private $typePiece;

    /**
     * Get the type piece.
     *
     * @return string Returns the type piece.
     */
    public function getTypePiece() {
        return $this->typePiece;
    }

    /**
     * Set the type piece.
     *
     * @param string $typePiece The type piece.
     */
    public function setTypePiece($typePiece) {
        $this->typePiece = $typePiece;
        return $this;
    }
}
