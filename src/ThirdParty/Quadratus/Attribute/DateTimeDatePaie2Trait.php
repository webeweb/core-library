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
 * Date paie2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDatePaie2Trait {

    /**
     * Date paie2.
     *
     * @var DateTime|null
     */
    private $datePaie2;

    /**
     * Get the date paie2.
     *
     * @return DateTime|null Returns the date paie2.
     */
    public function getDatePaie2() {
        return $this->datePaie2;
    }

    /**
     * Set the date paie2.
     *
     * @param DateTime|null $datePaie2 The date paie2.
     */
    public function setDatePaie2(DateTime $datePaie2 = null) {
        $this->datePaie2 = $datePaie2;
        return $this;
    }
}
