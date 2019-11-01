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
 * Date transfert interets trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateTransfertInteretsTrait {

    /**
     * Date transfert interets.
     *
     * @var DateTime|null
     */
    private $dateTransfertInterets;

    /**
     * Get the date transfert interets.
     *
     * @return DateTime|null Returns the date transfert interets.
     */
    public function getDateTransfertInterets() {
        return $this->dateTransfertInterets;
    }

    /**
     * Set the date transfert interets.
     *
     * @param DateTime|null $dateTransfertInterets The date transfert interets.
     */
    public function setDateTransfertInterets(DateTime $dateTransfertInterets = null) {
        $this->dateTransfertInterets = $dateTransfertInterets;
        return $this;
    }
}
