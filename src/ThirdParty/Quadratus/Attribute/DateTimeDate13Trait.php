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
 * Date13 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDate13Trait {

    /**
     * Date13.
     *
     * @var DateTime|null
     */
    private $date13;

    /**
     * Get the date13.
     *
     * @return DateTime|null Returns the date13.
     */
    public function getDate13() {
        return $this->date13;
    }

    /**
     * Set the date13.
     *
     * @param DateTime|null $date13 The date13.
     */
    public function setDate13(DateTime $date13 = null) {
        $this->date13 = $date13;
        return $this;
    }
}
