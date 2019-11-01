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
 * Date24 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDate24Trait {

    /**
     * Date24.
     *
     * @var DateTime|null
     */
    private $date24;

    /**
     * Get the date24.
     *
     * @return DateTime|null Returns the date24.
     */
    public function getDate24() {
        return $this->date24;
    }

    /**
     * Set the date24.
     *
     * @param DateTime|null $date24 The date24.
     */
    public function setDate24(DateTime $date24 = null) {
        $this->date24 = $date24;
        return $this;
    }
}
