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
 * Date fin contrat initiale trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateFinContratInitialeTrait {

    /**
     * Date fin contrat initiale.
     *
     * @var DateTime|null
     */
    private $dateFinContratInitiale;

    /**
     * Get the date fin contrat initiale.
     *
     * @return DateTime|null Returns the date fin contrat initiale.
     */
    public function getDateFinContratInitiale() {
        return $this->dateFinContratInitiale;
    }

    /**
     * Set the date fin contrat initiale.
     *
     * @param DateTime|null $dateFinContratInitiale The date fin contrat initiale.
     */
    public function setDateFinContratInitiale(DateTime $dateFinContratInitiale = null) {
        $this->dateFinContratInitiale = $dateFinContratInitiale;
        return $this;
    }
}
