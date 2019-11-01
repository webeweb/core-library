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
 * Debut periode das trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDebutPeriodeDasTrait {

    /**
     * Debut periode das.
     *
     * @var DateTime|null
     */
    private $debutPeriodeDas;

    /**
     * Get the debut periode das.
     *
     * @return DateTime|null Returns the debut periode das.
     */
    public function getDebutPeriodeDas() {
        return $this->debutPeriodeDas;
    }

    /**
     * Set the debut periode das.
     *
     * @param DateTime|null $debutPeriodeDas The debut periode das.
     */
    public function setDebutPeriodeDas(DateTime $debutPeriodeDas = null) {
        $this->debutPeriodeDas = $debutPeriodeDas;
        return $this;
    }
}
