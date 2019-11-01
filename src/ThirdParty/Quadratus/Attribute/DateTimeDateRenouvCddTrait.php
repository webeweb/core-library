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
 * Date renouv cdd trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateRenouvCddTrait {

    /**
     * Date renouv cdd.
     *
     * @var DateTime|null
     */
    private $dateRenouvCdd;

    /**
     * Get the date renouv cdd.
     *
     * @return DateTime|null Returns the date renouv cdd.
     */
    public function getDateRenouvCdd() {
        return $this->dateRenouvCdd;
    }

    /**
     * Set the date renouv cdd.
     *
     * @param DateTime|null $dateRenouvCdd The date renouv cdd.
     */
    public function setDateRenouvCdd(DateTime $dateRenouvCdd = null) {
        $this->dateRenouvCdd = $dateRenouvCdd;
        return $this;
    }
}
