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
 * Debut periode attest trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDebutPeriodeAttestTrait {

    /**
     * Debut periode attest.
     *
     * @var DateTime|null
     */
    private $debutPeriodeAttest;

    /**
     * Get the debut periode attest.
     *
     * @return DateTime|null Returns the debut periode attest.
     */
    public function getDebutPeriodeAttest() {
        return $this->debutPeriodeAttest;
    }

    /**
     * Set the debut periode attest.
     *
     * @param DateTime|null $debutPeriodeAttest The debut periode attest.
     */
    public function setDebutPeriodeAttest(DateTime $debutPeriodeAttest = null) {
        $this->debutPeriodeAttest = $debutPeriodeAttest;
        return $this;
    }
}
