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
 * Date49 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDate49Trait {

    /**
     * Date49.
     *
     * @var DateTime|null
     */
    private $date49;

    /**
     * Get the date49.
     *
     * @return DateTime|null Returns the date49.
     */
    public function getDate49() {
        return $this->date49;
    }

    /**
     * Set the date49.
     *
     * @param DateTime|null $date49 The date49.
     */
    public function setDate49(DateTime $date49 = null) {
        $this->date49 = $date49;
        return $this;
    }
}
