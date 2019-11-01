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
 * Date34 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDate34Trait {

    /**
     * Date34.
     *
     * @var DateTime|null
     */
    private $date34;

    /**
     * Get the date34.
     *
     * @return DateTime|null Returns the date34.
     */
    public function getDate34() {
        return $this->date34;
    }

    /**
     * Set the date34.
     *
     * @param DateTime|null $date34 The date34.
     */
    public function setDate34(DateTime $date34 = null) {
        $this->date34 = $date34;
        return $this;
    }
}
