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
 * Restrict acces pieces trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolRestrictAccesPiecesTrait {

    /**
     * Restrict acces pieces.
     *
     * @var bool
     */
    private $restrictAccesPieces;

    /**
     * Get the restrict acces pieces.
     *
     * @return bool Returns the restrict acces pieces.
     */
    public function getRestrictAccesPieces() {
        return $this->restrictAccesPieces;
    }

    /**
     * Set the restrict acces pieces.
     *
     * @param bool $restrictAccesPieces The restrict acces pieces.
     */
    public function setRestrictAccesPieces($restrictAccesPieces) {
        $this->restrictAccesPieces = $restrictAccesPieces;
        return $this;
    }
}
