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
 * Sign date trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeSignDateTrait {

    /**
     * Sign date.
     *
     * @var DateTime|null
     */
    private $signDate;

    /**
     * Get the sign date.
     *
     * @return DateTime|null Returns the sign date.
     */
    public function getSignDate() {
        return $this->signDate;
    }

    /**
     * Set the sign date.
     *
     * @param DateTime|null $signDate The sign date.
     */
    public function setSignDate(DateTime $signDate = null) {
        $this->signDate = $signDate;
        return $this;
    }
}
