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
 * Date4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDate4Trait {

    /**
     * Date4.
     *
     * @var DateTime|null
     */
    private $date4;

    /**
     * Get the date4.
     *
     * @return DateTime|null Returns the date4.
     */
    public function getDate4() {
        return $this->date4;
    }

    /**
     * Set the date4.
     *
     * @param DateTime|null $date4 The date4.
     */
    public function setDate4(DateTime $date4 = null) {
        $this->date4 = $date4;
        return $this;
    }
}
