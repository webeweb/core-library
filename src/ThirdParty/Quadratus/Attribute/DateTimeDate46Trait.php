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
 * Date46 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDate46Trait {

    /**
     * Date46.
     *
     * @var DateTime|null
     */
    private $date46;

    /**
     * Get the date46.
     *
     * @return DateTime|null Returns the date46.
     */
    public function getDate46() {
        return $this->date46;
    }

    /**
     * Set the date46.
     *
     * @param DateTime|null $date46 The date46.
     */
    public function setDate46(DateTime $date46 = null) {
        $this->date46 = $date46;
        return $this;
    }
}
