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
 * Date32 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDate32Trait {

    /**
     * Date32.
     *
     * @var DateTime|null
     */
    private $date32;

    /**
     * Get the date32.
     *
     * @return DateTime|null Returns the date32.
     */
    public function getDate32() {
        return $this->date32;
    }

    /**
     * Set the date32.
     *
     * @param DateTime|null $date32 The date32.
     */
    public function setDate32(DateTime $date32 = null) {
        $this->date32 = $date32;
        return $this;
    }
}
