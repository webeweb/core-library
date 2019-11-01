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
 * Date48 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDate48Trait {

    /**
     * Date48.
     *
     * @var DateTime|null
     */
    private $date48;

    /**
     * Get the date48.
     *
     * @return DateTime|null Returns the date48.
     */
    public function getDate48() {
        return $this->date48;
    }

    /**
     * Set the date48.
     *
     * @param DateTime|null $date48 The date48.
     */
    public function setDate48(DateTime $date48 = null) {
        $this->date48 = $date48;
        return $this;
    }
}
