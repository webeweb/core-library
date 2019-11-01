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
 * Etat priorite2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEtatPriorite2Trait {

    /**
     * Etat priorite2.
     *
     * @var string
     */
    private $etatPriorite2;

    /**
     * Get the etat priorite2.
     *
     * @return string Returns the etat priorite2.
     */
    public function getEtatPriorite2() {
        return $this->etatPriorite2;
    }

    /**
     * Set the etat priorite2.
     *
     * @param string $etatPriorite2 The etat priorite2.
     */
    public function setEtatPriorite2($etatPriorite2) {
        $this->etatPriorite2 = $etatPriorite2;
        return $this;
    }
}
