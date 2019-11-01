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
 * Date31 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDate31Trait {

    /**
     * Date31.
     *
     * @var DateTime|null
     */
    private $date31;

    /**
     * Get the date31.
     *
     * @return DateTime|null Returns the date31.
     */
    public function getDate31() {
        return $this->date31;
    }

    /**
     * Set the date31.
     *
     * @param DateTime|null $date31 The date31.
     */
    public function setDate31(DateTime $date31 = null) {
        $this->date31 = $date31;
        return $this;
    }
}
