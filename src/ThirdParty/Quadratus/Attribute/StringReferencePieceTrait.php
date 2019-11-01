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
 * Reference piece trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringReferencePieceTrait {

    /**
     * Reference piece.
     *
     * @var string
     */
    private $referencePiece;

    /**
     * Get the reference piece.
     *
     * @return string Returns the reference piece.
     */
    public function getReferencePiece() {
        return $this->referencePiece;
    }

    /**
     * Set the reference piece.
     *
     * @param string $referencePiece The reference piece.
     */
    public function setReferencePiece($referencePiece) {
        $this->referencePiece = $referencePiece;
        return $this;
    }
}
