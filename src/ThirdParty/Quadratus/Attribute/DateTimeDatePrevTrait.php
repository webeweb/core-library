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
 * Date prev trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDatePrevTrait {

    /**
     * Date prev.
     *
     * @var DateTime|null
     */
    private $datePrev;

    /**
     * Get the date prev.
     *
     * @return DateTime|null Returns the date prev.
     */
    public function getDatePrev() {
        return $this->datePrev;
    }

    /**
     * Set the date prev.
     *
     * @param DateTime|null $datePrev The date prev.
     */
    public function setDatePrev(DateTime $datePrev = null) {
        $this->datePrev = $datePrev;
        return $this;
    }
}
