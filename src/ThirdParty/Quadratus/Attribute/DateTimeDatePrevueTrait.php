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
 * Date prevue trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDatePrevueTrait {

    /**
     * Date prevue.
     *
     * @var DateTime|null
     */
    private $datePrevue;

    /**
     * Get the date prevue.
     *
     * @return DateTime|null Returns the date prevue.
     */
    public function getDatePrevue() {
        return $this->datePrevue;
    }

    /**
     * Set the date prevue.
     *
     * @param DateTime|null $datePrevue The date prevue.
     */
    public function setDatePrevue(DateTime $datePrevue = null) {
        $this->datePrevue = $datePrevue;
        return $this;
    }
}
