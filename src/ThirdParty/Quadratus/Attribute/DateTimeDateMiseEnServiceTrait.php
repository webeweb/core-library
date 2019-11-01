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
 * Date mise en service trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateMiseEnServiceTrait {

    /**
     * Date mise en service.
     *
     * @var DateTime|null
     */
    private $dateMiseEnService;

    /**
     * Get the date mise en service.
     *
     * @return DateTime|null Returns the date mise en service.
     */
    public function getDateMiseEnService() {
        return $this->dateMiseEnService;
    }

    /**
     * Set the date mise en service.
     *
     * @param DateTime|null $dateMiseEnService The date mise en service.
     */
    public function setDateMiseEnService(DateTime $dateMiseEnService = null) {
        $this->dateMiseEnService = $dateMiseEnService;
        return $this;
    }
}
