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
 * Droit sync q prop trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolDroitSyncQPropTrait {

    /**
     * Droit sync q prop.
     *
     * @var bool
     */
    private $droitSyncQProp;

    /**
     * Get the droit sync q prop.
     *
     * @return bool Returns the droit sync q prop.
     */
    public function getDroitSyncQProp() {
        return $this->droitSyncQProp;
    }

    /**
     * Set the droit sync q prop.
     *
     * @param bool $droitSyncQProp The droit sync q prop.
     */
    public function setDroitSyncQProp($droitSyncQProp) {
        $this->droitSyncQProp = $droitSyncQProp;
        return $this;
    }
}
