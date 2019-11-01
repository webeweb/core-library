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
 * Date fin service trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateFinServiceTrait {

    /**
     * Date fin service.
     *
     * @var DateTime|null
     */
    private $dateFinService;

    /**
     * Get the date fin service.
     *
     * @return DateTime|null Returns the date fin service.
     */
    public function getDateFinService() {
        return $this->dateFinService;
    }

    /**
     * Set the date fin service.
     *
     * @param DateTime|null $dateFinService The date fin service.
     */
    public function setDateFinService(DateTime $dateFinService = null) {
        $this->dateFinService = $dateFinService;
        return $this;
    }
}
