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
 * Date heure systeme trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateHeureSystemeTrait {

    /**
     * Date heure systeme.
     *
     * @var DateTime|null
     */
    private $dateHeureSysteme;

    /**
     * Get the date heure systeme.
     *
     * @return DateTime|null Returns the date heure systeme.
     */
    public function getDateHeureSysteme() {
        return $this->dateHeureSysteme;
    }

    /**
     * Set the date heure systeme.
     *
     * @param DateTime|null $dateHeureSysteme The date heure systeme.
     */
    public function setDateHeureSysteme(DateTime $dateHeureSysteme = null) {
        $this->dateHeureSysteme = $dateHeureSysteme;
        return $this;
    }
}
