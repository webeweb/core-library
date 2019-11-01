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
 * Periode edition nd f trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimePeriodeEditionNdFTrait {

    /**
     * Periode edition nd f.
     *
     * @var DateTime|null
     */
    private $periodeEditionNdF;

    /**
     * Get the periode edition nd f.
     *
     * @return DateTime|null Returns the periode edition nd f.
     */
    public function getPeriodeEditionNdF() {
        return $this->periodeEditionNdF;
    }

    /**
     * Set the periode edition nd f.
     *
     * @param DateTime|null $periodeEditionNdF The periode edition nd f.
     */
    public function setPeriodeEditionNdF(DateTime $periodeEditionNdF = null) {
        $this->periodeEditionNdF = $periodeEditionNdF;
        return $this;
    }
}
