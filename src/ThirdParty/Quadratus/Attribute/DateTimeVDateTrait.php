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
 * V date trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeVDateTrait {

    /**
     * V date.
     *
     * @var DateTime|null
     */
    private $vDate;

    /**
     * Get the v date.
     *
     * @return DateTime|null Returns the v date.
     */
    public function getVDate() {
        return $this->vDate;
    }

    /**
     * Set the v date.
     *
     * @param DateTime|null $vDate The v date.
     */
    public function setVDate(DateTime $vDate = null) {
        $this->vDate = $vDate;
        return $this;
    }
}
