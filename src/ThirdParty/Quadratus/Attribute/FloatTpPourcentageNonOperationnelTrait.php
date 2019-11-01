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
 * Tp pourcentage non operationnel trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTpPourcentageNonOperationnelTrait {

    /**
     * Tp pourcentage non operationnel.
     *
     * @var float
     */
    private $tpPourcentageNonOperationnel;

    /**
     * Get the tp pourcentage non operationnel.
     *
     * @return float Returns the tp pourcentage non operationnel.
     */
    public function getTpPourcentageNonOperationnel() {
        return $this->tpPourcentageNonOperationnel;
    }

    /**
     * Set the tp pourcentage non operationnel.
     *
     * @param float $tpPourcentageNonOperationnel The tp pourcentage non operationnel.
     */
    public function setTpPourcentageNonOperationnel($tpPourcentageNonOperationnel) {
        $this->tpPourcentageNonOperationnel = $tpPourcentageNonOperationnel;
        return $this;
    }
}
