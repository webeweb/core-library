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
 * Date transfert ech cb trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateTransfertEchCbTrait {

    /**
     * Date transfert ech cb.
     *
     * @var DateTime|null
     */
    private $dateTransfertEchCb;

    /**
     * Get the date transfert ech cb.
     *
     * @return DateTime|null Returns the date transfert ech cb.
     */
    public function getDateTransfertEchCb() {
        return $this->dateTransfertEchCb;
    }

    /**
     * Set the date transfert ech cb.
     *
     * @param DateTime|null $dateTransfertEchCb The date transfert ech cb.
     */
    public function setDateTransfertEchCb(DateTime $dateTransfertEchCb = null) {
        $this->dateTransfertEchCb = $dateTransfertEchCb;
        return $this;
    }
}
