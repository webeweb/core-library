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
 * Date ctrl norme prev trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateCtrlNormePrevTrait {

    /**
     * Date ctrl norme prev.
     *
     * @var DateTime|null
     */
    private $dateCtrlNormePrev;

    /**
     * Get the date ctrl norme prev.
     *
     * @return DateTime|null Returns the date ctrl norme prev.
     */
    public function getDateCtrlNormePrev() {
        return $this->dateCtrlNormePrev;
    }

    /**
     * Set the date ctrl norme prev.
     *
     * @param DateTime|null $dateCtrlNormePrev The date ctrl norme prev.
     */
    public function setDateCtrlNormePrev(DateTime $dateCtrlNormePrev = null) {
        $this->dateCtrlNormePrev = $dateCtrlNormePrev;
        return $this;
    }
}
