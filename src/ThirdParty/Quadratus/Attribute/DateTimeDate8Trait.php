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
 * Date8 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDate8Trait {

    /**
     * Date8.
     *
     * @var DateTime|null
     */
    private $date8;

    /**
     * Get the date8.
     *
     * @return DateTime|null Returns the date8.
     */
    public function getDate8() {
        return $this->date8;
    }

    /**
     * Set the date8.
     *
     * @param DateTime|null $date8 The date8.
     */
    public function setDate8(DateTime $date8 = null) {
        $this->date8 = $date8;
        return $this;
    }
}
