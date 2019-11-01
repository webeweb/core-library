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
 * Op reservation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolOpReservationTrait {

    /**
     * Op reservation.
     *
     * @var bool
     */
    private $opReservation;

    /**
     * Get the op reservation.
     *
     * @return bool Returns the op reservation.
     */
    public function getOpReservation() {
        return $this->opReservation;
    }

    /**
     * Set the op reservation.
     *
     * @param bool $opReservation The op reservation.
     */
    public function setOpReservation($opReservation) {
        $this->opReservation = $opReservation;
        return $this;
    }
}
