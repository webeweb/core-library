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
 * Date43 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDate43Trait {

    /**
     * Date43.
     *
     * @var DateTime|null
     */
    private $date43;

    /**
     * Get the date43.
     *
     * @return DateTime|null Returns the date43.
     */
    public function getDate43() {
        return $this->date43;
    }

    /**
     * Set the date43.
     *
     * @param DateTime|null $date43 The date43.
     */
    public function setDate43(DateTime $date43 = null) {
        $this->date43 = $date43;
        return $this;
    }
}
