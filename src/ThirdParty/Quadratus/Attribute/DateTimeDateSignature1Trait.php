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
 * Date signature1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateSignature1Trait {

    /**
     * Date signature1.
     *
     * @var DateTime|null
     */
    private $dateSignature1;

    /**
     * Get the date signature1.
     *
     * @return DateTime|null Returns the date signature1.
     */
    public function getDateSignature1() {
        return $this->dateSignature1;
    }

    /**
     * Set the date signature1.
     *
     * @param DateTime|null $dateSignature1 The date signature1.
     */
    public function setDateSignature1(DateTime $dateSignature1 = null) {
        $this->dateSignature1 = $dateSignature1;
        return $this;
    }
}
