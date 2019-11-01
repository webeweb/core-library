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
 * Tp pourcentage non operationnel date trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeTpPourcentageNonOperationnelDateTrait {

    /**
     * Tp pourcentage non operationnel date.
     *
     * @var DateTime|null
     */
    private $tpPourcentageNonOperationnelDate;

    /**
     * Get the tp pourcentage non operationnel date.
     *
     * @return DateTime|null Returns the tp pourcentage non operationnel date.
     */
    public function getTpPourcentageNonOperationnelDate() {
        return $this->tpPourcentageNonOperationnelDate;
    }

    /**
     * Set the tp pourcentage non operationnel date.
     *
     * @param DateTime|null $tpPourcentageNonOperationnelDate The tp pourcentage non operationnel date.
     */
    public function setTpPourcentageNonOperationnelDate(DateTime $tpPourcentageNonOperationnelDate = null) {
        $this->tpPourcentageNonOperationnelDate = $tpPourcentageNonOperationnelDate;
        return $this;
    }
}
