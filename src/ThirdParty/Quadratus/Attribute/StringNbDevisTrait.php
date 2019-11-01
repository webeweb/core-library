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
 * Nb devis trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNbDevisTrait {

    /**
     * Nb devis.
     *
     * @var string
     */
    private $nbDevis;

    /**
     * Get the nb devis.
     *
     * @return string Returns the nb devis.
     */
    public function getNbDevis() {
        return $this->nbDevis;
    }

    /**
     * Set the nb devis.
     *
     * @param string $nbDevis The nb devis.
     */
    public function setNbDevis($nbDevis) {
        $this->nbDevis = $nbDevis;
        return $this;
    }
}
