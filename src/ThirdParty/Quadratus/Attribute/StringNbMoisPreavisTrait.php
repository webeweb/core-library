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
 * Nb mois preavis trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNbMoisPreavisTrait {

    /**
     * Nb mois preavis.
     *
     * @var string
     */
    private $nbMoisPreavis;

    /**
     * Get the nb mois preavis.
     *
     * @return string Returns the nb mois preavis.
     */
    public function getNbMoisPreavis() {
        return $this->nbMoisPreavis;
    }

    /**
     * Set the nb mois preavis.
     *
     * @param string $nbMoisPreavis The nb mois preavis.
     */
    public function setNbMoisPreavis($nbMoisPreavis) {
        $this->nbMoisPreavis = $nbMoisPreavis;
        return $this;
    }
}
