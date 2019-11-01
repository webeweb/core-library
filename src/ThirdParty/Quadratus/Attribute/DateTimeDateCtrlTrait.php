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
 * Date ctrl trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateCtrlTrait {

    /**
     * Date ctrl.
     *
     * @var DateTime|null
     */
    private $dateCtrl;

    /**
     * Get the date ctrl.
     *
     * @return DateTime|null Returns the date ctrl.
     */
    public function getDateCtrl() {
        return $this->dateCtrl;
    }

    /**
     * Set the date ctrl.
     *
     * @param DateTime|null $dateCtrl The date ctrl.
     */
    public function setDateCtrl(DateTime $dateCtrl = null) {
        $this->dateCtrl = $dateCtrl;
        return $this;
    }
}
