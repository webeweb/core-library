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
 * Heure abs nuit trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeHeureAbsNuitTrait {

    /**
     * Heure abs nuit.
     *
     * @var DateTime|null
     */
    private $heureAbsNuit;

    /**
     * Get the heure abs nuit.
     *
     * @return DateTime|null Returns the heure abs nuit.
     */
    public function getHeureAbsNuit() {
        return $this->heureAbsNuit;
    }

    /**
     * Set the heure abs nuit.
     *
     * @param DateTime|null $heureAbsNuit The heure abs nuit.
     */
    public function setHeureAbsNuit(DateTime $heureAbsNuit = null) {
        $this->heureAbsNuit = $heureAbsNuit;
        return $this;
    }
}
