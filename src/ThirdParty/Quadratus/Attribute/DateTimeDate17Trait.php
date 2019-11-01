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
 * Date17 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDate17Trait {

    /**
     * Date17.
     *
     * @var DateTime|null
     */
    private $date17;

    /**
     * Get the date17.
     *
     * @return DateTime|null Returns the date17.
     */
    public function getDate17() {
        return $this->date17;
    }

    /**
     * Set the date17.
     *
     * @param DateTime|null $date17 The date17.
     */
    public function setDate17(DateTime $date17 = null) {
        $this->date17 = $date17;
        return $this;
    }
}
