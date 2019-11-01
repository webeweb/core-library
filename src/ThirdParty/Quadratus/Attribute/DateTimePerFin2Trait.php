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
 * Per fin2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimePerFin2Trait {

    /**
     * Per fin2.
     *
     * @var DateTime|null
     */
    private $perFin2;

    /**
     * Get the per fin2.
     *
     * @return DateTime|null Returns the per fin2.
     */
    public function getPerFin2() {
        return $this->perFin2;
    }

    /**
     * Set the per fin2.
     *
     * @param DateTime|null $perFin2 The per fin2.
     */
    public function setPerFin2(DateTime $perFin2 = null) {
        $this->perFin2 = $perFin2;
        return $this;
    }
}
