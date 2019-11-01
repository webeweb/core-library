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
 * Date transfert interets2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateTransfertInterets2Trait {

    /**
     * Date transfert interets2.
     *
     * @var DateTime|null
     */
    private $dateTransfertInterets2;

    /**
     * Get the date transfert interets2.
     *
     * @return DateTime|null Returns the date transfert interets2.
     */
    public function getDateTransfertInterets2() {
        return $this->dateTransfertInterets2;
    }

    /**
     * Set the date transfert interets2.
     *
     * @param DateTime|null $dateTransfertInterets2 The date transfert interets2.
     */
    public function setDateTransfertInterets2(DateTime $dateTransfertInterets2 = null) {
        $this->dateTransfertInterets2 = $dateTransfertInterets2;
        return $this;
    }
}
