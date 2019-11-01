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
 * Date transf int courus trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateTransfIntCourusTrait {

    /**
     * Date transf int courus.
     *
     * @var DateTime|null
     */
    private $dateTransfIntCourus;

    /**
     * Get the date transf int courus.
     *
     * @return DateTime|null Returns the date transf int courus.
     */
    public function getDateTransfIntCourus() {
        return $this->dateTransfIntCourus;
    }

    /**
     * Set the date transf int courus.
     *
     * @param DateTime|null $dateTransfIntCourus The date transf int courus.
     */
    public function setDateTransfIntCourus(DateTime $dateTransfIntCourus = null) {
        $this->dateTransfIntCourus = $dateTransfIntCourus;
        return $this;
    }
}
