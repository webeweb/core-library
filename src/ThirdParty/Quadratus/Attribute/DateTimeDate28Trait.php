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
 * Date28 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDate28Trait {

    /**
     * Date28.
     *
     * @var DateTime|null
     */
    private $date28;

    /**
     * Get the date28.
     *
     * @return DateTime|null Returns the date28.
     */
    public function getDate28() {
        return $this->date28;
    }

    /**
     * Set the date28.
     *
     * @param DateTime|null $date28 The date28.
     */
    public function setDate28(DateTime $date28 = null) {
        $this->date28 = $date28;
        return $this;
    }
}
