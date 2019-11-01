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
 * Date signature3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateSignature3Trait {

    /**
     * Date signature3.
     *
     * @var DateTime|null
     */
    private $dateSignature3;

    /**
     * Get the date signature3.
     *
     * @return DateTime|null Returns the date signature3.
     */
    public function getDateSignature3() {
        return $this->dateSignature3;
    }

    /**
     * Set the date signature3.
     *
     * @param DateTime|null $dateSignature3 The date signature3.
     */
    public function setDateSignature3(DateTime $dateSignature3 = null) {
        $this->dateSignature3 = $dateSignature3;
        return $this;
    }
}
