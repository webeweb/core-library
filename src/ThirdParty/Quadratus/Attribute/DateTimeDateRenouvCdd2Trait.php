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
 * Date renouv cdd2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateRenouvCdd2Trait {

    /**
     * Date renouv cdd2.
     *
     * @var DateTime|null
     */
    private $dateRenouvCdd2;

    /**
     * Get the date renouv cdd2.
     *
     * @return DateTime|null Returns the date renouv cdd2.
     */
    public function getDateRenouvCdd2() {
        return $this->dateRenouvCdd2;
    }

    /**
     * Set the date renouv cdd2.
     *
     * @param DateTime|null $dateRenouvCdd2 The date renouv cdd2.
     */
    public function setDateRenouvCdd2(DateTime $dateRenouvCdd2 = null) {
        $this->dateRenouvCdd2 = $dateRenouvCdd2;
        return $this;
    }
}
