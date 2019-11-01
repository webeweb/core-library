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
 * Periode preparation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimePeriodePreparationTrait {

    /**
     * Periode preparation.
     *
     * @var DateTime|null
     */
    private $periodePreparation;

    /**
     * Get the periode preparation.
     *
     * @return DateTime|null Returns the periode preparation.
     */
    public function getPeriodePreparation() {
        return $this->periodePreparation;
    }

    /**
     * Set the periode preparation.
     *
     * @param DateTime|null $periodePreparation The periode preparation.
     */
    public function setPeriodePreparation(DateTime $periodePreparation = null) {
        $this->periodePreparation = $periodePreparation;
        return $this;
    }
}
