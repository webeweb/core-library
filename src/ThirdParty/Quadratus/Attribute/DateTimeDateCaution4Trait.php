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
 * Date caution4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateCaution4Trait {

    /**
     * Date caution4.
     *
     * @var DateTime|null
     */
    private $dateCaution4;

    /**
     * Get the date caution4.
     *
     * @return DateTime|null Returns the date caution4.
     */
    public function getDateCaution4() {
        return $this->dateCaution4;
    }

    /**
     * Set the date caution4.
     *
     * @param DateTime|null $dateCaution4 The date caution4.
     */
    public function setDateCaution4(DateTime $dateCaution4 = null) {
        $this->dateCaution4 = $dateCaution4;
        return $this;
    }
}
