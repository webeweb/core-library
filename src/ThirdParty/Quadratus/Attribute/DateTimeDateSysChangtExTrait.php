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
 * Date sys changt ex trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateSysChangtExTrait {

    /**
     * Date sys changt ex.
     *
     * @var DateTime|null
     */
    private $dateSysChangtEx;

    /**
     * Get the date sys changt ex.
     *
     * @return DateTime|null Returns the date sys changt ex.
     */
    public function getDateSysChangtEx() {
        return $this->dateSysChangtEx;
    }

    /**
     * Set the date sys changt ex.
     *
     * @param DateTime|null $dateSysChangtEx The date sys changt ex.
     */
    public function setDateSysChangtEx(DateTime $dateSysChangtEx = null) {
        $this->dateSysChangtEx = $dateSysChangtEx;
        return $this;
    }
}
