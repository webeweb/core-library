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
 * Mandat date debut editva trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeMandatDateDebutEditvaTrait {

    /**
     * Mandat date debut editva.
     *
     * @var DateTime|null
     */
    private $mandatDateDebutEditva;

    /**
     * Get the mandat date debut editva.
     *
     * @return DateTime|null Returns the mandat date debut editva.
     */
    public function getMandatDateDebutEditva() {
        return $this->mandatDateDebutEditva;
    }

    /**
     * Set the mandat date debut editva.
     *
     * @param DateTime|null $mandatDateDebutEditva The mandat date debut editva.
     */
    public function setMandatDateDebutEditva(DateTime $mandatDateDebutEditva = null) {
        $this->mandatDateDebutEditva = $mandatDateDebutEditva;
        return $this;
    }
}
