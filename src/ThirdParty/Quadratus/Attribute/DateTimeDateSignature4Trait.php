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
 * Date signature4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateSignature4Trait {

    /**
     * Date signature4.
     *
     * @var DateTime|null
     */
    private $dateSignature4;

    /**
     * Get the date signature4.
     *
     * @return DateTime|null Returns the date signature4.
     */
    public function getDateSignature4() {
        return $this->dateSignature4;
    }

    /**
     * Set the date signature4.
     *
     * @param DateTime|null $dateSignature4 The date signature4.
     */
    public function setDateSignature4(DateTime $dateSignature4 = null) {
        $this->dateSignature4 = $dateSignature4;
        return $this;
    }
}
