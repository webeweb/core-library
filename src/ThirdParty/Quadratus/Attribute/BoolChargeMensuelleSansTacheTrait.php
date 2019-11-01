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
 * Charge mensuelle sans tache trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolChargeMensuelleSansTacheTrait {

    /**
     * Charge mensuelle sans tache.
     *
     * @var bool
     */
    private $chargeMensuelleSansTache;

    /**
     * Get the charge mensuelle sans tache.
     *
     * @return bool Returns the charge mensuelle sans tache.
     */
    public function getChargeMensuelleSansTache() {
        return $this->chargeMensuelleSansTache;
    }

    /**
     * Set the charge mensuelle sans tache.
     *
     * @param bool $chargeMensuelleSansTache The charge mensuelle sans tache.
     */
    public function setChargeMensuelleSansTache($chargeMensuelleSansTache) {
        $this->chargeMensuelleSansTache = $chargeMensuelleSansTache;
        return $this;
    }
}
