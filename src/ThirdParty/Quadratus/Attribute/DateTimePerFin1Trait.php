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
 * Per fin1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimePerFin1Trait {

    /**
     * Per fin1.
     *
     * @var DateTime|null
     */
    private $perFin1;

    /**
     * Get the per fin1.
     *
     * @return DateTime|null Returns the per fin1.
     */
    public function getPerFin1() {
        return $this->perFin1;
    }

    /**
     * Set the per fin1.
     *
     * @param DateTime|null $perFin1 The per fin1.
     */
    public function setPerFin1(DateTime $perFin1 = null) {
        $this->perFin1 = $perFin1;
        return $this;
    }
}
