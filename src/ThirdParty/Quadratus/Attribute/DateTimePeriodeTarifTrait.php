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
 * Periode tarif trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimePeriodeTarifTrait {

    /**
     * Periode tarif.
     *
     * @var DateTime|null
     */
    private $periodeTarif;

    /**
     * Get the periode tarif.
     *
     * @return DateTime|null Returns the periode tarif.
     */
    public function getPeriodeTarif() {
        return $this->periodeTarif;
    }

    /**
     * Set the periode tarif.
     *
     * @param DateTime|null $periodeTarif The periode tarif.
     */
    public function setPeriodeTarif(DateTime $periodeTarif = null) {
        $this->periodeTarif = $periodeTarif;
        return $this;
    }
}
