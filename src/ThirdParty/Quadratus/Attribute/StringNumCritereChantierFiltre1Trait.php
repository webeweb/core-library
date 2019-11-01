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
 * Num critere chantier filtre1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumCritereChantierFiltre1Trait {

    /**
     * Num critere chantier filtre1.
     *
     * @var string
     */
    private $numCritereChantierFiltre1;

    /**
     * Get the num critere chantier filtre1.
     *
     * @return string Returns the num critere chantier filtre1.
     */
    public function getNumCritereChantierFiltre1() {
        return $this->numCritereChantierFiltre1;
    }

    /**
     * Set the num critere chantier filtre1.
     *
     * @param string $numCritereChantierFiltre1 The num critere chantier filtre1.
     */
    public function setNumCritereChantierFiltre1($numCritereChantierFiltre1) {
        $this->numCritereChantierFiltre1 = $numCritereChantierFiltre1;
        return $this;
    }
}
