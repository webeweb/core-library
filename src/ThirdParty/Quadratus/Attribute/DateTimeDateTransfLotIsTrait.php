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
 * Date transf lot is trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateTransfLotIsTrait {

    /**
     * Date transf lot is.
     *
     * @var DateTime|null
     */
    private $dateTransfLotIs;

    /**
     * Get the date transf lot is.
     *
     * @return DateTime|null Returns the date transf lot is.
     */
    public function getDateTransfLotIs() {
        return $this->dateTransfLotIs;
    }

    /**
     * Set the date transf lot is.
     *
     * @param DateTime|null $dateTransfLotIs The date transf lot is.
     */
    public function setDateTransfLotIs(DateTime $dateTransfLotIs = null) {
        $this->dateTransfLotIs = $dateTransfLotIs;
        return $this;
    }
}
