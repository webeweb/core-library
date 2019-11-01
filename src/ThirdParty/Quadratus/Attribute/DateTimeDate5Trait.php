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
 * Date5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDate5Trait {

    /**
     * Date5.
     *
     * @var DateTime|null
     */
    private $date5;

    /**
     * Get the date5.
     *
     * @return DateTime|null Returns the date5.
     */
    public function getDate5() {
        return $this->date5;
    }

    /**
     * Set the date5.
     *
     * @param DateTime|null $date5 The date5.
     */
    public function setDate5(DateTime $date5 = null) {
        $this->date5 = $date5;
        return $this;
    }
}
