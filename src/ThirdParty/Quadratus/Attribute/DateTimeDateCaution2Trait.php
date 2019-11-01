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
 * Date caution2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateCaution2Trait {

    /**
     * Date caution2.
     *
     * @var DateTime|null
     */
    private $dateCaution2;

    /**
     * Get the date caution2.
     *
     * @return DateTime|null Returns the date caution2.
     */
    public function getDateCaution2() {
        return $this->dateCaution2;
    }

    /**
     * Set the date caution2.
     *
     * @param DateTime|null $dateCaution2 The date caution2.
     */
    public function setDateCaution2(DateTime $dateCaution2 = null) {
        $this->dateCaution2 = $dateCaution2;
        return $this;
    }
}
