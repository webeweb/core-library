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

/**
 * Sauver periodicite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSauverPeriodiciteTrait {

    /**
     * Sauver periodicite.
     *
     * @var bool
     */
    private $sauverPeriodicite;

    /**
     * Get the sauver periodicite.
     *
     * @return bool Returns the sauver periodicite.
     */
    public function getSauverPeriodicite() {
        return $this->sauverPeriodicite;
    }

    /**
     * Set the sauver periodicite.
     *
     * @param bool $sauverPeriodicite The sauver periodicite.
     */
    public function setSauverPeriodicite($sauverPeriodicite) {
        $this->sauverPeriodicite = $sauverPeriodicite;
        return $this;
    }
}
