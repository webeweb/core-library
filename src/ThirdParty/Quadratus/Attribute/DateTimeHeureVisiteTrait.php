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
 * Heure visite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeHeureVisiteTrait {

    /**
     * Heure visite.
     *
     * @var DateTime|null
     */
    private $heureVisite;

    /**
     * Get the heure visite.
     *
     * @return DateTime|null Returns the heure visite.
     */
    public function getHeureVisite() {
        return $this->heureVisite;
    }

    /**
     * Set the heure visite.
     *
     * @param DateTime|null $heureVisite The heure visite.
     */
    public function setHeureVisite(DateTime $heureVisite = null) {
        $this->heureVisite = $heureVisite;
        return $this;
    }
}
