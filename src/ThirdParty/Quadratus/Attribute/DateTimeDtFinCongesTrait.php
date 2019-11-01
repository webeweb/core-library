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
 * Dt fin conges trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDtFinCongesTrait {

    /**
     * Dt fin conges.
     *
     * @var DateTime|null
     */
    private $dtFinConges;

    /**
     * Get the dt fin conges.
     *
     * @return DateTime|null Returns the dt fin conges.
     */
    public function getDtFinConges() {
        return $this->dtFinConges;
    }

    /**
     * Set the dt fin conges.
     *
     * @param DateTime|null $dtFinConges The dt fin conges.
     */
    public function setDtFinConges(DateTime $dtFinConges = null) {
        $this->dtFinConges = $dtFinConges;
        return $this;
    }
}
