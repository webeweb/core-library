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
 * Date premiere echeance trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDatePremiereEcheanceTrait {

    /**
     * Date premiere echeance.
     *
     * @var DateTime|null
     */
    private $datePremiereEcheance;

    /**
     * Get the date premiere echeance.
     *
     * @return DateTime|null Returns the date premiere echeance.
     */
    public function getDatePremiereEcheance() {
        return $this->datePremiereEcheance;
    }

    /**
     * Set the date premiere echeance.
     *
     * @param DateTime|null $datePremiereEcheance The date premiere echeance.
     */
    public function setDatePremiereEcheance(DateTime $datePremiereEcheance = null) {
        $this->datePremiereEcheance = $datePremiereEcheance;
        return $this;
    }
}
