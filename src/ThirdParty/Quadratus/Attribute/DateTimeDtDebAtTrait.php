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
 * Dt deb at trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDtDebAtTrait {

    /**
     * Dt deb at.
     *
     * @var DateTime|null
     */
    private $dtDebAt;

    /**
     * Get the dt deb at.
     *
     * @return DateTime|null Returns the dt deb at.
     */
    public function getDtDebAt() {
        return $this->dtDebAt;
    }

    /**
     * Set the dt deb at.
     *
     * @param DateTime|null $dtDebAt The dt deb at.
     */
    public function setDtDebAt(DateTime $dtDebAt = null) {
        $this->dtDebAt = $dtDebAt;
        return $this;
    }
}
