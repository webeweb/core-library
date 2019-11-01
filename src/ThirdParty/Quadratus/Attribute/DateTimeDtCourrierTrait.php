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
 * Dt courrier trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDtCourrierTrait {

    /**
     * Dt courrier.
     *
     * @var DateTime|null
     */
    private $dtCourrier;

    /**
     * Get the dt courrier.
     *
     * @return DateTime|null Returns the dt courrier.
     */
    public function getDtCourrier() {
        return $this->dtCourrier;
    }

    /**
     * Set the dt courrier.
     *
     * @param DateTime|null $dtCourrier The dt courrier.
     */
    public function setDtCourrier(DateTime $dtCourrier = null) {
        $this->dtCourrier = $dtCourrier;
        return $this;
    }
}
