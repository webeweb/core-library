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
 * Date6 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDate6Trait {

    /**
     * Date6.
     *
     * @var DateTime|null
     */
    private $date6;

    /**
     * Get the date6.
     *
     * @return DateTime|null Returns the date6.
     */
    public function getDate6() {
        return $this->date6;
    }

    /**
     * Set the date6.
     *
     * @param DateTime|null $date6 The date6.
     */
    public function setDate6(DateTime $date6 = null) {
        $this->date6 = $date6;
        return $this;
    }
}
