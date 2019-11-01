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
 * Date message lu trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateMessageLuTrait {

    /**
     * Date message lu.
     *
     * @var DateTime|null
     */
    private $dateMessageLu;

    /**
     * Get the date message lu.
     *
     * @return DateTime|null Returns the date message lu.
     */
    public function getDateMessageLu() {
        return $this->dateMessageLu;
    }

    /**
     * Set the date message lu.
     *
     * @param DateTime|null $dateMessageLu The date message lu.
     */
    public function setDateMessageLu(DateTime $dateMessageLu = null) {
        $this->dateMessageLu = $dateMessageLu;
        return $this;
    }
}
