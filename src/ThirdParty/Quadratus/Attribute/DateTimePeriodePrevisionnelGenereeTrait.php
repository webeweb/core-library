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
 * Periode previsionnel generee trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimePeriodePrevisionnelGenereeTrait {

    /**
     * Periode previsionnel generee.
     *
     * @var DateTime|null
     */
    private $periodePrevisionnelGeneree;

    /**
     * Get the periode previsionnel generee.
     *
     * @return DateTime|null Returns the periode previsionnel generee.
     */
    public function getPeriodePrevisionnelGeneree() {
        return $this->periodePrevisionnelGeneree;
    }

    /**
     * Set the periode previsionnel generee.
     *
     * @param DateTime|null $periodePrevisionnelGeneree The periode previsionnel generee.
     */
    public function setPeriodePrevisionnelGeneree(DateTime $periodePrevisionnelGeneree = null) {
        $this->periodePrevisionnelGeneree = $periodePrevisionnelGeneree;
        return $this;
    }
}
