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
 * Date signature5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateSignature5Trait {

    /**
     * Date signature5.
     *
     * @var DateTime|null
     */
    private $dateSignature5;

    /**
     * Get the date signature5.
     *
     * @return DateTime|null Returns the date signature5.
     */
    public function getDateSignature5() {
        return $this->dateSignature5;
    }

    /**
     * Set the date signature5.
     *
     * @param DateTime|null $dateSignature5 The date signature5.
     */
    public function setDateSignature5(DateTime $dateSignature5 = null) {
        $this->dateSignature5 = $dateSignature5;
        return $this;
    }
}
