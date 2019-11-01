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
 * Date21 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDate21Trait {

    /**
     * Date21.
     *
     * @var DateTime|null
     */
    private $date21;

    /**
     * Get the date21.
     *
     * @return DateTime|null Returns the date21.
     */
    public function getDate21() {
        return $this->date21;
    }

    /**
     * Set the date21.
     *
     * @param DateTime|null $date21 The date21.
     */
    public function setDate21(DateTime $date21 = null) {
        $this->date21 = $date21;
        return $this;
    }
}
