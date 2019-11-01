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
 * Date2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDate2Trait {

    /**
     * Date2.
     *
     * @var DateTime|null
     */
    private $date2;

    /**
     * Get the date2.
     *
     * @return DateTime|null Returns the date2.
     */
    public function getDate2() {
        return $this->date2;
    }

    /**
     * Set the date2.
     *
     * @param DateTime|null $date2 The date2.
     */
    public function setDate2(DateTime $date2 = null) {
        $this->date2 = $date2;
        return $this;
    }
}
