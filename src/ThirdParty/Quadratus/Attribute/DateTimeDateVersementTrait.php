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
 * Date versement trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateVersementTrait {

    /**
     * Date versement.
     *
     * @var DateTime|null
     */
    private $dateVersement;

    /**
     * Get the date versement.
     *
     * @return DateTime|null Returns the date versement.
     */
    public function getDateVersement() {
        return $this->dateVersement;
    }

    /**
     * Set the date versement.
     *
     * @param DateTime|null $dateVersement The date versement.
     */
    public function setDateVersement(DateTime $dateVersement = null) {
        $this->dateVersement = $dateVersement;
        return $this;
    }
}
