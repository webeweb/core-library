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
 * Date20 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDate20Trait {

    /**
     * Date20.
     *
     * @var DateTime|null
     */
    private $date20;

    /**
     * Get the date20.
     *
     * @return DateTime|null Returns the date20.
     */
    public function getDate20() {
        return $this->date20;
    }

    /**
     * Set the date20.
     *
     * @param DateTime|null $date20 The date20.
     */
    public function setDate20(DateTime $date20 = null) {
        $this->date20 = $date20;
        return $this;
    }
}
