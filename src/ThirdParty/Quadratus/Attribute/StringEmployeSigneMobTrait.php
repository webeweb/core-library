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
 * Employe signe mob trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEmployeSigneMobTrait {

    /**
     * Employe signe mob.
     *
     * @var string
     */
    private $employeSigneMob;

    /**
     * Get the employe signe mob.
     *
     * @return string Returns the employe signe mob.
     */
    public function getEmployeSigneMob() {
        return $this->employeSigneMob;
    }

    /**
     * Set the employe signe mob.
     *
     * @param string $employeSigneMob The employe signe mob.
     */
    public function setEmployeSigneMob($employeSigneMob) {
        $this->employeSigneMob = $employeSigneMob;
        return $this;
    }
}
