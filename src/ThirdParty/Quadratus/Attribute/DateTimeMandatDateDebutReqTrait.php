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
 * Mandat date debut req trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeMandatDateDebutReqTrait {

    /**
     * Mandat date debut req.
     *
     * @var DateTime|null
     */
    private $mandatDateDebutReq;

    /**
     * Get the mandat date debut req.
     *
     * @return DateTime|null Returns the mandat date debut req.
     */
    public function getMandatDateDebutReq() {
        return $this->mandatDateDebutReq;
    }

    /**
     * Set the mandat date debut req.
     *
     * @param DateTime|null $mandatDateDebutReq The mandat date debut req.
     */
    public function setMandatDateDebutReq(DateTime $mandatDateDebutReq = null) {
        $this->mandatDateDebutReq = $mandatDateDebutReq;
        return $this;
    }
}
