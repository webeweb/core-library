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
 * Mandat date debut dads trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeMandatDateDebutDadsTrait {

    /**
     * Mandat date debut dads.
     *
     * @var DateTime|null
     */
    private $mandatDateDebutDads;

    /**
     * Get the mandat date debut dads.
     *
     * @return DateTime|null Returns the mandat date debut dads.
     */
    public function getMandatDateDebutDads() {
        return $this->mandatDateDebutDads;
    }

    /**
     * Set the mandat date debut dads.
     *
     * @param DateTime|null $mandatDateDebutDads The mandat date debut dads.
     */
    public function setMandatDateDebutDads(DateTime $mandatDateDebutDads = null) {
        $this->mandatDateDebutDads = $mandatDateDebutDads;
        return $this;
    }
}
