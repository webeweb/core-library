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
 * Periode debut trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimePeriodeDebutTrait {

    /**
     * Periode debut.
     *
     * @var DateTime|null
     */
    private $periodeDebut;

    /**
     * Get the periode debut.
     *
     * @return DateTime|null Returns the periode debut.
     */
    public function getPeriodeDebut() {
        return $this->periodeDebut;
    }

    /**
     * Set the periode debut.
     *
     * @param DateTime|null $periodeDebut The periode debut.
     */
    public function setPeriodeDebut(DateTime $periodeDebut = null) {
        $this->periodeDebut = $periodeDebut;
        return $this;
    }
}
