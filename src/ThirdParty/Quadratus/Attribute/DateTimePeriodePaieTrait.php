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
 * Periode paie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimePeriodePaieTrait {

    /**
     * Periode paie.
     *
     * @var DateTime|null
     */
    private $periodePaie;

    /**
     * Get the periode paie.
     *
     * @return DateTime|null Returns the periode paie.
     */
    public function getPeriodePaie() {
        return $this->periodePaie;
    }

    /**
     * Set the periode paie.
     *
     * @param DateTime|null $periodePaie The periode paie.
     */
    public function setPeriodePaie(DateTime $periodePaie = null) {
        $this->periodePaie = $periodePaie;
        return $this;
    }
}
