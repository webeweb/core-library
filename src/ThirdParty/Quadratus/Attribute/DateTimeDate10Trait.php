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
 * Date10 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDate10Trait {

    /**
     * Date10.
     *
     * @var DateTime|null
     */
    private $date10;

    /**
     * Get the date10.
     *
     * @return DateTime|null Returns the date10.
     */
    public function getDate10() {
        return $this->date10;
    }

    /**
     * Set the date10.
     *
     * @param DateTime|null $date10 The date10.
     */
    public function setDate10(DateTime $date10 = null) {
        $this->date10 = $date10;
        return $this;
    }
}
