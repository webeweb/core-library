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
 * Date visite reprise trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateVisiteRepriseTrait {

    /**
     * Date visite reprise.
     *
     * @var DateTime|null
     */
    private $dateVisiteReprise;

    /**
     * Get the date visite reprise.
     *
     * @return DateTime|null Returns the date visite reprise.
     */
    public function getDateVisiteReprise() {
        return $this->dateVisiteReprise;
    }

    /**
     * Set the date visite reprise.
     *
     * @param DateTime|null $dateVisiteReprise The date visite reprise.
     */
    public function setDateVisiteReprise(DateTime $dateVisiteReprise = null) {
        $this->dateVisiteReprise = $dateVisiteReprise;
        return $this;
    }
}
