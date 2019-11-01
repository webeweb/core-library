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
 * Dt deb conges trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDtDebCongesTrait {

    /**
     * Dt deb conges.
     *
     * @var DateTime|null
     */
    private $dtDebConges;

    /**
     * Get the dt deb conges.
     *
     * @return DateTime|null Returns the dt deb conges.
     */
    public function getDtDebConges() {
        return $this->dtDebConges;
    }

    /**
     * Set the dt deb conges.
     *
     * @param DateTime|null $dtDebConges The dt deb conges.
     */
    public function setDtDebConges(DateTime $dtDebConges = null) {
        $this->dtDebConges = $dtDebConges;
        return $this;
    }
}
