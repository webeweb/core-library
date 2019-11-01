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
 * Date41 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDate41Trait {

    /**
     * Date41.
     *
     * @var DateTime|null
     */
    private $date41;

    /**
     * Get the date41.
     *
     * @return DateTime|null Returns the date41.
     */
    public function getDate41() {
        return $this->date41;
    }

    /**
     * Set the date41.
     *
     * @param DateTime|null $date41 The date41.
     */
    public function setDate41(DateTime $date41 = null) {
        $this->date41 = $date41;
        return $this;
    }
}
