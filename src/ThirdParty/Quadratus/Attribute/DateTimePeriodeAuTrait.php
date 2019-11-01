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
 * Periode au trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimePeriodeAuTrait {

    /**
     * Periode au.
     *
     * @var DateTime|null
     */
    private $periodeAu;

    /**
     * Get the periode au.
     *
     * @return DateTime|null Returns the periode au.
     */
    public function getPeriodeAu() {
        return $this->periodeAu;
    }

    /**
     * Set the periode au.
     *
     * @param DateTime|null $periodeAu The periode au.
     */
    public function setPeriodeAu(DateTime $periodeAu = null) {
        $this->periodeAu = $periodeAu;
        return $this;
    }
}
