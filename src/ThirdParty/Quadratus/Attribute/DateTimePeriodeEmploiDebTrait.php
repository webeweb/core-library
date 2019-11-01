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
 * Periode emploi deb trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimePeriodeEmploiDebTrait {

    /**
     * Periode emploi deb.
     *
     * @var DateTime|null
     */
    private $periodeEmploiDeb;

    /**
     * Get the periode emploi deb.
     *
     * @return DateTime|null Returns the periode emploi deb.
     */
    public function getPeriodeEmploiDeb() {
        return $this->periodeEmploiDeb;
    }

    /**
     * Set the periode emploi deb.
     *
     * @param DateTime|null $periodeEmploiDeb The periode emploi deb.
     */
    public function setPeriodeEmploiDeb(DateTime $periodeEmploiDeb = null) {
        $this->periodeEmploiDeb = $periodeEmploiDeb;
        return $this;
    }
}
