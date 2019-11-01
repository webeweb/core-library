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
 * Periode i paie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimePeriodeIPaieTrait {

    /**
     * Periode i paie.
     *
     * @var DateTime|null
     */
    private $periodeIPaie;

    /**
     * Get the periode i paie.
     *
     * @return DateTime|null Returns the periode i paie.
     */
    public function getPeriodeIPaie() {
        return $this->periodeIPaie;
    }

    /**
     * Set the periode i paie.
     *
     * @param DateTime|null $periodeIPaie The periode i paie.
     */
    public function setPeriodeIPaie(DateTime $periodeIPaie = null) {
        $this->periodeIPaie = $periodeIPaie;
        return $this;
    }
}
