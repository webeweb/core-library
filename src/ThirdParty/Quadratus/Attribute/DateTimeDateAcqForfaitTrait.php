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
 * Date acq forfait trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateAcqForfaitTrait {

    /**
     * Date acq forfait.
     *
     * @var DateTime|null
     */
    private $dateAcqForfait;

    /**
     * Get the date acq forfait.
     *
     * @return DateTime|null Returns the date acq forfait.
     */
    public function getDateAcqForfait() {
        return $this->dateAcqForfait;
    }

    /**
     * Set the date acq forfait.
     *
     * @param DateTime|null $dateAcqForfait The date acq forfait.
     */
    public function setDateAcqForfait(DateTime $dateAcqForfait = null) {
        $this->dateAcqForfait = $dateAcqForfait;
        return $this;
    }
}
