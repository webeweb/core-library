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
 * Date7 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDate7Trait {

    /**
     * Date7.
     *
     * @var DateTime|null
     */
    private $date7;

    /**
     * Get the date7.
     *
     * @return DateTime|null Returns the date7.
     */
    public function getDate7() {
        return $this->date7;
    }

    /**
     * Set the date7.
     *
     * @param DateTime|null $date7 The date7.
     */
    public function setDate7(DateTime $date7 = null) {
        $this->date7 = $date7;
        return $this;
    }
}
