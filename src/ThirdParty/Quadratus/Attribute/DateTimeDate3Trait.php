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
 * Date3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDate3Trait {

    /**
     * Date3.
     *
     * @var DateTime|null
     */
    private $date3;

    /**
     * Get the date3.
     *
     * @return DateTime|null Returns the date3.
     */
    public function getDate3() {
        return $this->date3;
    }

    /**
     * Set the date3.
     *
     * @param DateTime|null $date3 The date3.
     */
    public function setDate3(DateTime $date3 = null) {
        $this->date3 = $date3;
        return $this;
    }
}
