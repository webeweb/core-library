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
 * Saisie num piece trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringSaisieNumPieceTrait {

    /**
     * Saisie num piece.
     *
     * @var string
     */
    private $saisieNumPiece;

    /**
     * Get the saisie num piece.
     *
     * @return string Returns the saisie num piece.
     */
    public function getSaisieNumPiece() {
        return $this->saisieNumPiece;
    }

    /**
     * Set the saisie num piece.
     *
     * @param string $saisieNumPiece The saisie num piece.
     */
    public function setSaisieNumPiece($saisieNumPiece) {
        $this->saisieNumPiece = $saisieNumPiece;
        return $this;
    }
}
