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
 * Tp rempli pref auto trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTpRempliPrefAutoTrait {

    /**
     * Tp rempli pref auto.
     *
     * @var bool
     */
    private $tpRempliPrefAuto;

    /**
     * Get the tp rempli pref auto.
     *
     * @return bool Returns the tp rempli pref auto.
     */
    public function getTpRempliPrefAuto() {
        return $this->tpRempliPrefAuto;
    }

    /**
     * Set the tp rempli pref auto.
     *
     * @param bool $tpRempliPrefAuto The tp rempli pref auto.
     */
    public function setTpRempliPrefAuto($tpRempliPrefAuto) {
        $this->tpRempliPrefAuto = $tpRempliPrefAuto;
        return $this;
    }
}
