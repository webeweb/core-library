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
 * Date caution5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateCaution5Trait {

    /**
     * Date caution5.
     *
     * @var DateTime|null
     */
    private $dateCaution5;

    /**
     * Get the date caution5.
     *
     * @return DateTime|null Returns the date caution5.
     */
    public function getDateCaution5() {
        return $this->dateCaution5;
    }

    /**
     * Set the date caution5.
     *
     * @param DateTime|null $dateCaution5 The date caution5.
     */
    public function setDateCaution5(DateTime $dateCaution5 = null) {
        $this->dateCaution5 = $dateCaution5;
        return $this;
    }
}
