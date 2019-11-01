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
 * Periode saisie fin trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimePeriodeSaisieFinTrait {

    /**
     * Periode saisie fin.
     *
     * @var DateTime|null
     */
    private $periodeSaisieFin;

    /**
     * Get the periode saisie fin.
     *
     * @return DateTime|null Returns the periode saisie fin.
     */
    public function getPeriodeSaisieFin() {
        return $this->periodeSaisieFin;
    }

    /**
     * Set the periode saisie fin.
     *
     * @param DateTime|null $periodeSaisieFin The periode saisie fin.
     */
    public function setPeriodeSaisieFin(DateTime $periodeSaisieFin = null) {
        $this->periodeSaisieFin = $periodeSaisieFin;
        return $this;
    }
}
