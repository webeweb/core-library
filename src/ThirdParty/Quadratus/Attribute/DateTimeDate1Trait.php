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
 * Date1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDate1Trait {

    /**
     * Date1.
     *
     * @var DateTime|null
     */
    private $date1;

    /**
     * Get the date1.
     *
     * @return DateTime|null Returns the date1.
     */
    public function getDate1() {
        return $this->date1;
    }

    /**
     * Set the date1.
     *
     * @param DateTime|null $date1 The date1.
     */
    public function setDate1(DateTime $date1 = null) {
        $this->date1 = $date1;
        return $this;
    }
}
