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
 * Date passage cdi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDatePassageCdiTrait {

    /**
     * Date passage cdi.
     *
     * @var DateTime|null
     */
    private $datePassageCdi;

    /**
     * Get the date passage cdi.
     *
     * @return DateTime|null Returns the date passage cdi.
     */
    public function getDatePassageCdi() {
        return $this->datePassageCdi;
    }

    /**
     * Set the date passage cdi.
     *
     * @param DateTime|null $datePassageCdi The date passage cdi.
     */
    public function setDatePassageCdi(DateTime $datePassageCdi = null) {
        $this->datePassageCdi = $datePassageCdi;
        return $this;
    }
}
