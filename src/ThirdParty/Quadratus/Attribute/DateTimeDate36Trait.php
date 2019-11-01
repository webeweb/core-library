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
 * Date36 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDate36Trait {

    /**
     * Date36.
     *
     * @var DateTime|null
     */
    private $date36;

    /**
     * Get the date36.
     *
     * @return DateTime|null Returns the date36.
     */
    public function getDate36() {
        return $this->date36;
    }

    /**
     * Set the date36.
     *
     * @param DateTime|null $date36 The date36.
     */
    public function setDate36(DateTime $date36 = null) {
        $this->date36 = $date36;
        return $this;
    }
}
