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
 * Etat priorite1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEtatPriorite1Trait {

    /**
     * Etat priorite1.
     *
     * @var string
     */
    private $etatPriorite1;

    /**
     * Get the etat priorite1.
     *
     * @return string Returns the etat priorite1.
     */
    public function getEtatPriorite1() {
        return $this->etatPriorite1;
    }

    /**
     * Set the etat priorite1.
     *
     * @param string $etatPriorite1 The etat priorite1.
     */
    public function setEtatPriorite1($etatPriorite1) {
        $this->etatPriorite1 = $etatPriorite1;
        return $this;
    }
}
