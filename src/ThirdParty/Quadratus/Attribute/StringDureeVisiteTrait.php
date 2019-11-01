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

/**
 * Duree visite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDureeVisiteTrait {

    /**
     * Duree visite.
     *
     * @var string
     */
    private $dureeVisite;

    /**
     * Get the duree visite.
     *
     * @return string Returns the duree visite.
     */
    public function getDureeVisite() {
        return $this->dureeVisite;
    }

    /**
     * Set the duree visite.
     *
     * @param string $dureeVisite The duree visite.
     */
    public function setDureeVisite($dureeVisite) {
        $this->dureeVisite = $dureeVisite;
        return $this;
    }
}
