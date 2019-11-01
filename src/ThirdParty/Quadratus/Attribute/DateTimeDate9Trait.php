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
 * Date9 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDate9Trait {

    /**
     * Date9.
     *
     * @var DateTime|null
     */
    private $date9;

    /**
     * Get the date9.
     *
     * @return DateTime|null Returns the date9.
     */
    public function getDate9() {
        return $this->date9;
    }

    /**
     * Set the date9.
     *
     * @param DateTime|null $date9 The date9.
     */
    public function setDate9(DateTime $date9 = null) {
        $this->date9 = $date9;
        return $this;
    }
}
