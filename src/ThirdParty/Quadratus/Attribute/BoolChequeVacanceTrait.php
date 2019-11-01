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

/**
 * Cheque vacance trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolChequeVacanceTrait {

    /**
     * Cheque vacance.
     *
     * @var bool
     */
    private $chequeVacance;

    /**
     * Get the cheque vacance.
     *
     * @return bool Returns the cheque vacance.
     */
    public function getChequeVacance() {
        return $this->chequeVacance;
    }

    /**
     * Set the cheque vacance.
     *
     * @param bool $chequeVacance The cheque vacance.
     */
    public function setChequeVacance($chequeVacance) {
        $this->chequeVacance = $chequeVacance;
        return $this;
    }
}
