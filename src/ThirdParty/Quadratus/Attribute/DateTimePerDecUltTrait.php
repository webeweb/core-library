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
 * Per dec ult trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimePerDecUltTrait {

    /**
     * Per dec ult.
     *
     * @var DateTime|null
     */
    private $perDecUlt;

    /**
     * Get the per dec ult.
     *
     * @return DateTime|null Returns the per dec ult.
     */
    public function getPerDecUlt() {
        return $this->perDecUlt;
    }

    /**
     * Set the per dec ult.
     *
     * @param DateTime|null $perDecUlt The per dec ult.
     */
    public function setPerDecUlt(DateTime $perDecUlt = null) {
        $this->perDecUlt = $perDecUlt;
        return $this;
    }
}
