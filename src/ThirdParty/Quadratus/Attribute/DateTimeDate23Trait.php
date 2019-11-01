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
 * Date23 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDate23Trait {

    /**
     * Date23.
     *
     * @var DateTime|null
     */
    private $date23;

    /**
     * Get the date23.
     *
     * @return DateTime|null Returns the date23.
     */
    public function getDate23() {
        return $this->date23;
    }

    /**
     * Set the date23.
     *
     * @param DateTime|null $date23 The date23.
     */
    public function setDate23(DateTime $date23 = null) {
        $this->date23 = $date23;
        return $this;
    }
}
