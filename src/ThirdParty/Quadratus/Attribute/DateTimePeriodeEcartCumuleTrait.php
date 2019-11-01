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
 * Periode ecart cumule trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimePeriodeEcartCumuleTrait {

    /**
     * Periode ecart cumule.
     *
     * @var DateTime|null
     */
    private $periodeEcartCumule;

    /**
     * Get the periode ecart cumule.
     *
     * @return DateTime|null Returns the periode ecart cumule.
     */
    public function getPeriodeEcartCumule() {
        return $this->periodeEcartCumule;
    }

    /**
     * Set the periode ecart cumule.
     *
     * @param DateTime|null $periodeEcartCumule The periode ecart cumule.
     */
    public function setPeriodeEcartCumule(DateTime $periodeEcartCumule = null) {
        $this->periodeEcartCumule = $periodeEcartCumule;
        return $this;
    }
}
