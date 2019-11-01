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
 * Date16 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDate16Trait {

    /**
     * Date16.
     *
     * @var DateTime|null
     */
    private $date16;

    /**
     * Get the date16.
     *
     * @return DateTime|null Returns the date16.
     */
    public function getDate16() {
        return $this->date16;
    }

    /**
     * Set the date16.
     *
     * @param DateTime|null $date16 The date16.
     */
    public function setDate16(DateTime $date16 = null) {
        $this->date16 = $date16;
        return $this;
    }
}
