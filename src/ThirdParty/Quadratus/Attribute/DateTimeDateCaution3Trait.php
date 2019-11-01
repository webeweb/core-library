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
 * Date caution3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateCaution3Trait {

    /**
     * Date caution3.
     *
     * @var DateTime|null
     */
    private $dateCaution3;

    /**
     * Get the date caution3.
     *
     * @return DateTime|null Returns the date caution3.
     */
    public function getDateCaution3() {
        return $this->dateCaution3;
    }

    /**
     * Set the date caution3.
     *
     * @param DateTime|null $dateCaution3 The date caution3.
     */
    public function setDateCaution3(DateTime $dateCaution3 = null) {
        $this->dateCaution3 = $dateCaution3;
        return $this;
    }
}
