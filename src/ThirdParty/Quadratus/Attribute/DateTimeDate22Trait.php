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
 * Date22 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDate22Trait {

    /**
     * Date22.
     *
     * @var DateTime|null
     */
    private $date22;

    /**
     * Get the date22.
     *
     * @return DateTime|null Returns the date22.
     */
    public function getDate22() {
        return $this->date22;
    }

    /**
     * Set the date22.
     *
     * @param DateTime|null $date22 The date22.
     */
    public function setDate22(DateTime $date22 = null) {
        $this->date22 = $date22;
        return $this;
    }
}
