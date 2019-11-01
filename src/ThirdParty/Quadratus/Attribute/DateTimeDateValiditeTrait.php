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
 * Date validite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateValiditeTrait {

    /**
     * Date validite.
     *
     * @var DateTime|null
     */
    private $dateValidite;

    /**
     * Get the date validite.
     *
     * @return DateTime|null Returns the date validite.
     */
    public function getDateValidite() {
        return $this->dateValidite;
    }

    /**
     * Set the date validite.
     *
     * @param DateTime|null $dateValidite The date validite.
     */
    public function setDateValidite(DateTime $dateValidite = null) {
        $this->dateValidite = $dateValidite;
        return $this;
    }
}
