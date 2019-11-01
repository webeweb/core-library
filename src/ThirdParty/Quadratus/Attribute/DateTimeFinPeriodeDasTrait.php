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
 * Fin periode das trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeFinPeriodeDasTrait {

    /**
     * Fin periode das.
     *
     * @var DateTime|null
     */
    private $finPeriodeDas;

    /**
     * Get the fin periode das.
     *
     * @return DateTime|null Returns the fin periode das.
     */
    public function getFinPeriodeDas() {
        return $this->finPeriodeDas;
    }

    /**
     * Set the fin periode das.
     *
     * @param DateTime|null $finPeriodeDas The fin periode das.
     */
    public function setFinPeriodeDas(DateTime $finPeriodeDas = null) {
        $this->finPeriodeDas = $finPeriodeDas;
        return $this;
    }
}
