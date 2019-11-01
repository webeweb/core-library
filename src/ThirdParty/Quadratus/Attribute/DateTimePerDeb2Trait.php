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
 * Per deb2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimePerDeb2Trait {

    /**
     * Per deb2.
     *
     * @var DateTime|null
     */
    private $perDeb2;

    /**
     * Get the per deb2.
     *
     * @return DateTime|null Returns the per deb2.
     */
    public function getPerDeb2() {
        return $this->perDeb2;
    }

    /**
     * Set the per deb2.
     *
     * @param DateTime|null $perDeb2 The per deb2.
     */
    public function setPerDeb2(DateTime $perDeb2 = null) {
        $this->perDeb2 = $perDeb2;
        return $this;
    }
}
