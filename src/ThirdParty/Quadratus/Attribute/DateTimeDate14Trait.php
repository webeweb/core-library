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
 * Date14 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDate14Trait {

    /**
     * Date14.
     *
     * @var DateTime|null
     */
    private $date14;

    /**
     * Get the date14.
     *
     * @return DateTime|null Returns the date14.
     */
    public function getDate14() {
        return $this->date14;
    }

    /**
     * Set the date14.
     *
     * @param DateTime|null $date14 The date14.
     */
    public function setDate14(DateTime $date14 = null) {
        $this->date14 = $date14;
        return $this;
    }
}
