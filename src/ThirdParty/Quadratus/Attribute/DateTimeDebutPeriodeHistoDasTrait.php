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
 * Debut periode histo das trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDebutPeriodeHistoDasTrait {

    /**
     * Debut periode histo das.
     *
     * @var DateTime|null
     */
    private $debutPeriodeHistoDas;

    /**
     * Get the debut periode histo das.
     *
     * @return DateTime|null Returns the debut periode histo das.
     */
    public function getDebutPeriodeHistoDas() {
        return $this->debutPeriodeHistoDas;
    }

    /**
     * Set the debut periode histo das.
     *
     * @param DateTime|null $debutPeriodeHistoDas The debut periode histo das.
     */
    public function setDebutPeriodeHistoDas(DateTime $debutPeriodeHistoDas = null) {
        $this->debutPeriodeHistoDas = $debutPeriodeHistoDas;
        return $this;
    }
}
