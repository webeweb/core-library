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
 * Date12 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDate12Trait {

    /**
     * Date12.
     *
     * @var DateTime|null
     */
    private $date12;

    /**
     * Get the date12.
     *
     * @return DateTime|null Returns the date12.
     */
    public function getDate12() {
        return $this->date12;
    }

    /**
     * Set the date12.
     *
     * @param DateTime|null $date12 The date12.
     */
    public function setDate12(DateTime $date12 = null) {
        $this->date12 = $date12;
        return $this;
    }
}
