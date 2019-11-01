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
 * Periode transf immo trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimePeriodeTransfImmoTrait {

    /**
     * Periode transf immo.
     *
     * @var DateTime|null
     */
    private $periodeTransfImmo;

    /**
     * Get the periode transf immo.
     *
     * @return DateTime|null Returns the periode transf immo.
     */
    public function getPeriodeTransfImmo() {
        return $this->periodeTransfImmo;
    }

    /**
     * Set the periode transf immo.
     *
     * @param DateTime|null $periodeTransfImmo The periode transf immo.
     */
    public function setPeriodeTransfImmo(DateTime $periodeTransfImmo = null) {
        $this->periodeTransfImmo = $periodeTransfImmo;
        return $this;
    }
}
