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
 * Mandat duree req trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntMandatDureeReqTrait {

    /**
     * Mandat duree req.
     *
     * @var int
     */
    private $mandatDureeReq;

    /**
     * Get the mandat duree req.
     *
     * @return int Returns the mandat duree req.
     */
    public function getMandatDureeReq() {
        return $this->mandatDureeReq;
    }

    /**
     * Set the mandat duree req.
     *
     * @param int $mandatDureeReq The mandat duree req.
     */
    public function setMandatDureeReq($mandatDureeReq) {
        $this->mandatDureeReq = $mandatDureeReq;
        return $this;
    }
}
