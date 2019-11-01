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
 * Date plafond interets2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDatePlafondInterets2Trait {

    /**
     * Date plafond interets2.
     *
     * @var DateTime|null
     */
    private $datePlafondInterets2;

    /**
     * Get the date plafond interets2.
     *
     * @return DateTime|null Returns the date plafond interets2.
     */
    public function getDatePlafondInterets2() {
        return $this->datePlafondInterets2;
    }

    /**
     * Set the date plafond interets2.
     *
     * @param DateTime|null $datePlafondInterets2 The date plafond interets2.
     */
    public function setDatePlafondInterets2(DateTime $datePlafondInterets2 = null) {
        $this->datePlafondInterets2 = $datePlafondInterets2;
        return $this;
    }
}
