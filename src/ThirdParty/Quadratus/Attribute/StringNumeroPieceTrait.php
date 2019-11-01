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
 * Numero piece trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumeroPieceTrait {

    /**
     * Numero piece.
     *
     * @var string
     */
    private $numeroPiece;

    /**
     * Get the numero piece.
     *
     * @return string Returns the numero piece.
     */
    public function getNumeroPiece() {
        return $this->numeroPiece;
    }

    /**
     * Set the numero piece.
     *
     * @param string $numeroPiece The numero piece.
     */
    public function setNumeroPiece($numeroPiece) {
        $this->numeroPiece = $numeroPiece;
        return $this;
    }
}
