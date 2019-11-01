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
 * Date rachat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateRachatTrait {

    /**
     * Date rachat.
     *
     * @var DateTime|null
     */
    private $dateRachat;

    /**
     * Get the date rachat.
     *
     * @return DateTime|null Returns the date rachat.
     */
    public function getDateRachat() {
        return $this->dateRachat;
    }

    /**
     * Set the date rachat.
     *
     * @param DateTime|null $dateRachat The date rachat.
     */
    public function setDateRachat(DateTime $dateRachat = null) {
        $this->dateRachat = $dateRachat;
        return $this;
    }
}
