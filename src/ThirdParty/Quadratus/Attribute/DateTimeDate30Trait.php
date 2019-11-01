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
 * Date30 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDate30Trait {

    /**
     * Date30.
     *
     * @var DateTime|null
     */
    private $date30;

    /**
     * Get the date30.
     *
     * @return DateTime|null Returns the date30.
     */
    public function getDate30() {
        return $this->date30;
    }

    /**
     * Set the date30.
     *
     * @param DateTime|null $date30 The date30.
     */
    public function setDate30(DateTime $date30 = null) {
        $this->date30 = $date30;
        return $this;
    }
}
