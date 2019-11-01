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
 * Date18 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDate18Trait {

    /**
     * Date18.
     *
     * @var DateTime|null
     */
    private $date18;

    /**
     * Get the date18.
     *
     * @return DateTime|null Returns the date18.
     */
    public function getDate18() {
        return $this->date18;
    }

    /**
     * Set the date18.
     *
     * @param DateTime|null $date18 The date18.
     */
    public function setDate18(DateTime $date18 = null) {
        $this->date18 = $date18;
        return $this;
    }
}
