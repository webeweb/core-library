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
 * Prochain num piece trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntProchainNumPieceTrait {

    /**
     * Prochain num piece.
     *
     * @var int
     */
    private $prochainNumPiece;

    /**
     * Get the prochain num piece.
     *
     * @return int Returns the prochain num piece.
     */
    public function getProchainNumPiece() {
        return $this->prochainNumPiece;
    }

    /**
     * Set the prochain num piece.
     *
     * @param int $prochainNumPiece The prochain num piece.
     */
    public function setProchainNumPiece($prochainNumPiece) {
        $this->prochainNumPiece = $prochainNumPiece;
        return $this;
    }
}
