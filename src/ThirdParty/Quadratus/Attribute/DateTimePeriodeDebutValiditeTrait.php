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
 * Periode debut validite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimePeriodeDebutValiditeTrait {

    /**
     * Periode debut validite.
     *
     * @var DateTime|null
     */
    private $periodeDebutValidite;

    /**
     * Get the periode debut validite.
     *
     * @return DateTime|null Returns the periode debut validite.
     */
    public function getPeriodeDebutValidite() {
        return $this->periodeDebutValidite;
    }

    /**
     * Set the periode debut validite.
     *
     * @param DateTime|null $periodeDebutValidite The periode debut validite.
     */
    public function setPeriodeDebutValidite(DateTime $periodeDebutValidite = null) {
        $this->periodeDebutValidite = $periodeDebutValidite;
        return $this;
    }
}
