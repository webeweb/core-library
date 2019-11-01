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
 * Date42 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDate42Trait {

    /**
     * Date42.
     *
     * @var DateTime|null
     */
    private $date42;

    /**
     * Get the date42.
     *
     * @return DateTime|null Returns the date42.
     */
    public function getDate42() {
        return $this->date42;
    }

    /**
     * Set the date42.
     *
     * @param DateTime|null $date42 The date42.
     */
    public function setDate42(DateTime $date42 = null) {
        $this->date42 = $date42;
        return $this;
    }
}
