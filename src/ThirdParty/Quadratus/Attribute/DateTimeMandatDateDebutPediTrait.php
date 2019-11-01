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
 * Mandat date debut pedi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeMandatDateDebutPediTrait {

    /**
     * Mandat date debut pedi.
     *
     * @var DateTime|null
     */
    private $mandatDateDebutPedi;

    /**
     * Get the mandat date debut pedi.
     *
     * @return DateTime|null Returns the mandat date debut pedi.
     */
    public function getMandatDateDebutPedi() {
        return $this->mandatDateDebutPedi;
    }

    /**
     * Set the mandat date debut pedi.
     *
     * @param DateTime|null $mandatDateDebutPedi The mandat date debut pedi.
     */
    public function setMandatDateDebutPedi(DateTime $mandatDateDebutPedi = null) {
        $this->mandatDateDebutPedi = $mandatDateDebutPedi;
        return $this;
    }
}
