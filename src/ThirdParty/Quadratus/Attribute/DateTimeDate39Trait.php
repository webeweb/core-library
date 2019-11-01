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
 * Date39 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDate39Trait {

    /**
     * Date39.
     *
     * @var DateTime|null
     */
    private $date39;

    /**
     * Get the date39.
     *
     * @return DateTime|null Returns the date39.
     */
    public function getDate39() {
        return $this->date39;
    }

    /**
     * Set the date39.
     *
     * @param DateTime|null $date39 The date39.
     */
    public function setDate39(DateTime $date39 = null) {
        $this->date39 = $date39;
        return $this;
    }
}
