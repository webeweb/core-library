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
 * Date45 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDate45Trait {

    /**
     * Date45.
     *
     * @var DateTime|null
     */
    private $date45;

    /**
     * Get the date45.
     *
     * @return DateTime|null Returns the date45.
     */
    public function getDate45() {
        return $this->date45;
    }

    /**
     * Set the date45.
     *
     * @param DateTime|null $date45 The date45.
     */
    public function setDate45(DateTime $date45 = null) {
        $this->date45 = $date45;
        return $this;
    }
}
