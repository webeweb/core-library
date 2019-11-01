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

use DateTime;

/**
 * Date piece trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDatePieceTrait {

    /**
     * Date piece.
     *
     * @var DateTime|null
     */
    private $datePiece;

    /**
     * Get the date piece.
     *
     * @return DateTime|null Returns the date piece.
     */
    public function getDatePiece() {
        return $this->datePiece;
    }

    /**
     * Set the date piece.
     *
     * @param DateTime|null $datePiece The date piece.
     */
    public function setDatePiece(DateTime $datePiece = null) {
        $this->datePiece = $datePiece;
        return $this;
    }
}
