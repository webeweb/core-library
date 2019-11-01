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
 * Date caution trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateCautionTrait {

    /**
     * Date caution.
     *
     * @var DateTime|null
     */
    private $dateCaution;

    /**
     * Get the date caution.
     *
     * @return DateTime|null Returns the date caution.
     */
    public function getDateCaution() {
        return $this->dateCaution;
    }

    /**
     * Set the date caution.
     *
     * @param DateTime|null $dateCaution The date caution.
     */
    public function setDateCaution(DateTime $dateCaution = null) {
        $this->dateCaution = $dateCaution;
        return $this;
    }
}
