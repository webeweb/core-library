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
 * Mandat date debut tdfc trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeMandatDateDebutTdfcTrait {

    /**
     * Mandat date debut tdfc.
     *
     * @var DateTime|null
     */
    private $mandatDateDebutTdfc;

    /**
     * Get the mandat date debut tdfc.
     *
     * @return DateTime|null Returns the mandat date debut tdfc.
     */
    public function getMandatDateDebutTdfc() {
        return $this->mandatDateDebutTdfc;
    }

    /**
     * Set the mandat date debut tdfc.
     *
     * @param DateTime|null $mandatDateDebutTdfc The mandat date debut tdfc.
     */
    public function setMandatDateDebutTdfc(DateTime $mandatDateDebutTdfc = null) {
        $this->mandatDateDebutTdfc = $mandatDateDebutTdfc;
        return $this;
    }
}
