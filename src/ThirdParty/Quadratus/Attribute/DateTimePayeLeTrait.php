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
 * Paye le trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimePayeLeTrait {

    /**
     * Paye le.
     *
     * @var DateTime|null
     */
    private $payeLe;

    /**
     * Get the paye le.
     *
     * @return DateTime|null Returns the paye le.
     */
    public function getPayeLe() {
        return $this->payeLe;
    }

    /**
     * Set the paye le.
     *
     * @param DateTime|null $payeLe The paye le.
     */
    public function setPayeLe(DateTime $payeLe = null) {
        $this->payeLe = $payeLe;
        return $this;
    }
}
