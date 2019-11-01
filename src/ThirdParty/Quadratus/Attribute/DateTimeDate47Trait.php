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
 * Date47 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDate47Trait {

    /**
     * Date47.
     *
     * @var DateTime|null
     */
    private $date47;

    /**
     * Get the date47.
     *
     * @return DateTime|null Returns the date47.
     */
    public function getDate47() {
        return $this->date47;
    }

    /**
     * Set the date47.
     *
     * @param DateTime|null $date47 The date47.
     */
    public function setDate47(DateTime $date47 = null) {
        $this->date47 = $date47;
        return $this;
    }
}
