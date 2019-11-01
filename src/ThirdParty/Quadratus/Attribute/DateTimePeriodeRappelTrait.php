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
 * Periode rappel trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimePeriodeRappelTrait {

    /**
     * Periode rappel.
     *
     * @var DateTime|null
     */
    private $periodeRappel;

    /**
     * Get the periode rappel.
     *
     * @return DateTime|null Returns the periode rappel.
     */
    public function getPeriodeRappel() {
        return $this->periodeRappel;
    }

    /**
     * Set the periode rappel.
     *
     * @param DateTime|null $periodeRappel The periode rappel.
     */
    public function setPeriodeRappel(DateTime $periodeRappel = null) {
        $this->periodeRappel = $periodeRappel;
        return $this;
    }
}
