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
 * Date25 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDate25Trait {

    /**
     * Date25.
     *
     * @var DateTime|null
     */
    private $date25;

    /**
     * Get the date25.
     *
     * @return DateTime|null Returns the date25.
     */
    public function getDate25() {
        return $this->date25;
    }

    /**
     * Set the date25.
     *
     * @param DateTime|null $date25 The date25.
     */
    public function setDate25(DateTime $date25 = null) {
        $this->date25 = $date25;
        return $this;
    }
}
