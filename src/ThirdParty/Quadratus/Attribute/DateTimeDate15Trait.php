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
 * Date15 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDate15Trait {

    /**
     * Date15.
     *
     * @var DateTime|null
     */
    private $date15;

    /**
     * Get the date15.
     *
     * @return DateTime|null Returns the date15.
     */
    public function getDate15() {
        return $this->date15;
    }

    /**
     * Set the date15.
     *
     * @param DateTime|null $date15 The date15.
     */
    public function setDate15(DateTime $date15 = null) {
        $this->date15 = $date15;
        return $this;
    }
}
