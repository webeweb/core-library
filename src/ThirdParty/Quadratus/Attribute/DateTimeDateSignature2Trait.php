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
 * Date signature2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateSignature2Trait {

    /**
     * Date signature2.
     *
     * @var DateTime|null
     */
    private $dateSignature2;

    /**
     * Get the date signature2.
     *
     * @return DateTime|null Returns the date signature2.
     */
    public function getDateSignature2() {
        return $this->dateSignature2;
    }

    /**
     * Set the date signature2.
     *
     * @param DateTime|null $dateSignature2 The date signature2.
     */
    public function setDateSignature2(DateTime $dateSignature2 = null) {
        $this->dateSignature2 = $dateSignature2;
        return $this;
    }
}
