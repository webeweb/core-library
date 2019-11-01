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
 * Date transfert ech lf trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateTransfertEchLfTrait {

    /**
     * Date transfert ech lf.
     *
     * @var DateTime|null
     */
    private $dateTransfertEchLf;

    /**
     * Get the date transfert ech lf.
     *
     * @return DateTime|null Returns the date transfert ech lf.
     */
    public function getDateTransfertEchLf() {
        return $this->dateTransfertEchLf;
    }

    /**
     * Set the date transfert ech lf.
     *
     * @param DateTime|null $dateTransfertEchLf The date transfert ech lf.
     */
    public function setDateTransfertEchLf(DateTime $dateTransfertEchLf = null) {
        $this->dateTransfertEchLf = $dateTransfertEchLf;
        return $this;
    }
}
