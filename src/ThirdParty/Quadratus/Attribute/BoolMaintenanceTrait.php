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
 * Maintenance trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolMaintenanceTrait {

    /**
     * Maintenance.
     *
     * @var bool
     */
    private $maintenance;

    /**
     * Get the maintenance.
     *
     * @return bool Returns the maintenance.
     */
    public function getMaintenance() {
        return $this->maintenance;
    }

    /**
     * Set the maintenance.
     *
     * @param bool $maintenance The maintenance.
     */
    public function setMaintenance($maintenance) {
        $this->maintenance = $maintenance;
        return $this;
    }
}
