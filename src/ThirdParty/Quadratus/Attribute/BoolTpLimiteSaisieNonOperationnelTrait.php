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
 * Tp limite saisie non operationnel trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTpLimiteSaisieNonOperationnelTrait {

    /**
     * Tp limite saisie non operationnel.
     *
     * @var bool
     */
    private $tpLimiteSaisieNonOperationnel;

    /**
     * Get the tp limite saisie non operationnel.
     *
     * @return bool Returns the tp limite saisie non operationnel.
     */
    public function getTpLimiteSaisieNonOperationnel() {
        return $this->tpLimiteSaisieNonOperationnel;
    }

    /**
     * Set the tp limite saisie non operationnel.
     *
     * @param bool $tpLimiteSaisieNonOperationnel The tp limite saisie non operationnel.
     */
    public function setTpLimiteSaisieNonOperationnel($tpLimiteSaisieNonOperationnel) {
        $this->tpLimiteSaisieNonOperationnel = $tpLimiteSaisieNonOperationnel;
        return $this;
    }
}
