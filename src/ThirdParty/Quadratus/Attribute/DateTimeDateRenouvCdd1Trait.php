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
 * Date renouv cdd1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateRenouvCdd1Trait {

    /**
     * Date renouv cdd1.
     *
     * @var DateTime|null
     */
    private $dateRenouvCdd1;

    /**
     * Get the date renouv cdd1.
     *
     * @return DateTime|null Returns the date renouv cdd1.
     */
    public function getDateRenouvCdd1() {
        return $this->dateRenouvCdd1;
    }

    /**
     * Set the date renouv cdd1.
     *
     * @param DateTime|null $dateRenouvCdd1 The date renouv cdd1.
     */
    public function setDateRenouvCdd1(DateTime $dateRenouvCdd1 = null) {
        $this->dateRenouvCdd1 = $dateRenouvCdd1;
        return $this;
    }
}
