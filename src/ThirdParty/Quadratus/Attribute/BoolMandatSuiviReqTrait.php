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
 * Mandat suivi req trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolMandatSuiviReqTrait {

    /**
     * Mandat suivi req.
     *
     * @var bool
     */
    private $mandatSuiviReq;

    /**
     * Get the mandat suivi req.
     *
     * @return bool Returns the mandat suivi req.
     */
    public function getMandatSuiviReq() {
        return $this->mandatSuiviReq;
    }

    /**
     * Set the mandat suivi req.
     *
     * @param bool $mandatSuiviReq The mandat suivi req.
     */
    public function setMandatSuiviReq($mandatSuiviReq) {
        $this->mandatSuiviReq = $mandatSuiviReq;
        return $this;
    }
}
