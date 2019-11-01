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
 * Date ctrl norme ret trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateCtrlNormeRetTrait {

    /**
     * Date ctrl norme ret.
     *
     * @var DateTime|null
     */
    private $dateCtrlNormeRet;

    /**
     * Get the date ctrl norme ret.
     *
     * @return DateTime|null Returns the date ctrl norme ret.
     */
    public function getDateCtrlNormeRet() {
        return $this->dateCtrlNormeRet;
    }

    /**
     * Set the date ctrl norme ret.
     *
     * @param DateTime|null $dateCtrlNormeRet The date ctrl norme ret.
     */
    public function setDateCtrlNormeRet(DateTime $dateCtrlNormeRet = null) {
        $this->dateCtrlNormeRet = $dateCtrlNormeRet;
        return $this;
    }
}
