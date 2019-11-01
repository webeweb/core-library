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
 * Periode emploi fin trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimePeriodeEmploiFinTrait {

    /**
     * Periode emploi fin.
     *
     * @var DateTime|null
     */
    private $periodeEmploiFin;

    /**
     * Get the periode emploi fin.
     *
     * @return DateTime|null Returns the periode emploi fin.
     */
    public function getPeriodeEmploiFin() {
        return $this->periodeEmploiFin;
    }

    /**
     * Set the periode emploi fin.
     *
     * @param DateTime|null $periodeEmploiFin The periode emploi fin.
     */
    public function setPeriodeEmploiFin(DateTime $periodeEmploiFin = null) {
        $this->periodeEmploiFin = $periodeEmploiFin;
        return $this;
    }
}
