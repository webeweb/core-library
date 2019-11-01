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
 * Mandat date debut ducsedi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeMandatDateDebutDucsediTrait {

    /**
     * Mandat date debut ducsedi.
     *
     * @var DateTime|null
     */
    private $mandatDateDebutDucsedi;

    /**
     * Get the mandat date debut ducsedi.
     *
     * @return DateTime|null Returns the mandat date debut ducsedi.
     */
    public function getMandatDateDebutDucsedi() {
        return $this->mandatDateDebutDucsedi;
    }

    /**
     * Set the mandat date debut ducsedi.
     *
     * @param DateTime|null $mandatDateDebutDucsedi The mandat date debut ducsedi.
     */
    public function setMandatDateDebutDucsedi(DateTime $mandatDateDebutDucsedi = null) {
        $this->mandatDateDebutDucsedi = $mandatDateDebutDucsedi;
        return $this;
    }
}
