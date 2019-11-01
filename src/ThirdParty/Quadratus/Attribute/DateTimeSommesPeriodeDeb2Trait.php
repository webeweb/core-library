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
 * Sommes periode deb2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeSommesPeriodeDeb2Trait {

    /**
     * Sommes periode deb2.
     *
     * @var DateTime|null
     */
    private $sommesPeriodeDeb2;

    /**
     * Get the sommes periode deb2.
     *
     * @return DateTime|null Returns the sommes periode deb2.
     */
    public function getSommesPeriodeDeb2() {
        return $this->sommesPeriodeDeb2;
    }

    /**
     * Set the sommes periode deb2.
     *
     * @param DateTime|null $sommesPeriodeDeb2 The sommes periode deb2.
     */
    public function setSommesPeriodeDeb2(DateTime $sommesPeriodeDeb2 = null) {
        $this->sommesPeriodeDeb2 = $sommesPeriodeDeb2;
        return $this;
    }
}
