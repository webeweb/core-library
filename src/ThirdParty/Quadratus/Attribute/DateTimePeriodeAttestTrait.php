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
 * Periode attest trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimePeriodeAttestTrait {

    /**
     * Periode attest.
     *
     * @var DateTime|null
     */
    private $periodeAttest;

    /**
     * Get the periode attest.
     *
     * @return DateTime|null Returns the periode attest.
     */
    public function getPeriodeAttest() {
        return $this->periodeAttest;
    }

    /**
     * Set the periode attest.
     *
     * @param DateTime|null $periodeAttest The periode attest.
     */
    public function setPeriodeAttest(DateTime $periodeAttest = null) {
        $this->periodeAttest = $periodeAttest;
        return $this;
    }
}
