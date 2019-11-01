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
 * Per deb1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimePerDeb1Trait {

    /**
     * Per deb1.
     *
     * @var DateTime|null
     */
    private $perDeb1;

    /**
     * Get the per deb1.
     *
     * @return DateTime|null Returns the per deb1.
     */
    public function getPerDeb1() {
        return $this->perDeb1;
    }

    /**
     * Set the per deb1.
     *
     * @param DateTime|null $perDeb1 The per deb1.
     */
    public function setPerDeb1(DateTime $perDeb1 = null) {
        $this->perDeb1 = $perDeb1;
        return $this;
    }
}
