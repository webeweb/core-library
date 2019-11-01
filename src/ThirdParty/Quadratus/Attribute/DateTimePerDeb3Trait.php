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
 * Per deb3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimePerDeb3Trait {

    /**
     * Per deb3.
     *
     * @var DateTime|null
     */
    private $perDeb3;

    /**
     * Get the per deb3.
     *
     * @return DateTime|null Returns the per deb3.
     */
    public function getPerDeb3() {
        return $this->perDeb3;
    }

    /**
     * Set the per deb3.
     *
     * @param DateTime|null $perDeb3 The per deb3.
     */
    public function setPerDeb3(DateTime $perDeb3 = null) {
        $this->perDeb3 = $perDeb3;
        return $this;
    }
}
