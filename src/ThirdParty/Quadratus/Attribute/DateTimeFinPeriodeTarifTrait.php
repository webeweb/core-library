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
 * Fin periode tarif trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeFinPeriodeTarifTrait {

    /**
     * Fin periode tarif.
     *
     * @var DateTime|null
     */
    private $finPeriodeTarif;

    /**
     * Get the fin periode tarif.
     *
     * @return DateTime|null Returns the fin periode tarif.
     */
    public function getFinPeriodeTarif() {
        return $this->finPeriodeTarif;
    }

    /**
     * Set the fin periode tarif.
     *
     * @param DateTime|null $finPeriodeTarif The fin periode tarif.
     */
    public function setFinPeriodeTarif(DateTime $finPeriodeTarif = null) {
        $this->finPeriodeTarif = $finPeriodeTarif;
        return $this;
    }
}
