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
 * Mandat date debut etebac trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeMandatDateDebutEtebacTrait {

    /**
     * Mandat date debut etebac.
     *
     * @var DateTime|null
     */
    private $mandatDateDebutEtebac;

    /**
     * Get the mandat date debut etebac.
     *
     * @return DateTime|null Returns the mandat date debut etebac.
     */
    public function getMandatDateDebutEtebac() {
        return $this->mandatDateDebutEtebac;
    }

    /**
     * Set the mandat date debut etebac.
     *
     * @param DateTime|null $mandatDateDebutEtebac The mandat date debut etebac.
     */
    public function setMandatDateDebutEtebac(DateTime $mandatDateDebutEtebac = null) {
        $this->mandatDateDebutEtebac = $mandatDateDebutEtebac;
        return $this;
    }
}
