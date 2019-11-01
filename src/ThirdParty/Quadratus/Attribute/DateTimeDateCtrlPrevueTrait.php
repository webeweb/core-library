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
 * Date ctrl prevue trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateCtrlPrevueTrait {

    /**
     * Date ctrl prevue.
     *
     * @var DateTime|null
     */
    private $dateCtrlPrevue;

    /**
     * Get the date ctrl prevue.
     *
     * @return DateTime|null Returns the date ctrl prevue.
     */
    public function getDateCtrlPrevue() {
        return $this->dateCtrlPrevue;
    }

    /**
     * Set the date ctrl prevue.
     *
     * @param DateTime|null $dateCtrlPrevue The date ctrl prevue.
     */
    public function setDateCtrlPrevue(DateTime $dateCtrlPrevue = null) {
        $this->dateCtrlPrevue = $dateCtrlPrevue;
        return $this;
    }
}
