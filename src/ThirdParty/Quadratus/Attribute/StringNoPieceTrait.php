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
 * No piece trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNoPieceTrait {

    /**
     * No piece.
     *
     * @var string
     */
    private $noPiece;

    /**
     * Get the no piece.
     *
     * @return string Returns the no piece.
     */
    public function getNoPiece() {
        return $this->noPiece;
    }

    /**
     * Set the no piece.
     *
     * @param string $noPiece The no piece.
     */
    public function setNoPiece($noPiece) {
        $this->noPiece = $noPiece;
        return $this;
    }
}
