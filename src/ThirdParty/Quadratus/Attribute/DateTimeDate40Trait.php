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
 * Date40 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDate40Trait {

    /**
     * Date40.
     *
     * @var DateTime|null
     */
    private $date40;

    /**
     * Get the date40.
     *
     * @return DateTime|null Returns the date40.
     */
    public function getDate40() {
        return $this->date40;
    }

    /**
     * Set the date40.
     *
     * @param DateTime|null $date40 The date40.
     */
    public function setDate40(DateTime $date40 = null) {
        $this->date40 = $date40;
        return $this;
    }
}
