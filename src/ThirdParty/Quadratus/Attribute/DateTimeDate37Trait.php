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
 * Date37 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDate37Trait {

    /**
     * Date37.
     *
     * @var DateTime|null
     */
    private $date37;

    /**
     * Get the date37.
     *
     * @return DateTime|null Returns the date37.
     */
    public function getDate37() {
        return $this->date37;
    }

    /**
     * Set the date37.
     *
     * @param DateTime|null $date37 The date37.
     */
    public function setDate37(DateTime $date37 = null) {
        $this->date37 = $date37;
        return $this;
    }
}
