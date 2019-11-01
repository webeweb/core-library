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
 * Date33 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDate33Trait {

    /**
     * Date33.
     *
     * @var DateTime|null
     */
    private $date33;

    /**
     * Get the date33.
     *
     * @return DateTime|null Returns the date33.
     */
    public function getDate33() {
        return $this->date33;
    }

    /**
     * Set the date33.
     *
     * @param DateTime|null $date33 The date33.
     */
    public function setDate33(DateTime $date33 = null) {
        $this->date33 = $date33;
        return $this;
    }
}
