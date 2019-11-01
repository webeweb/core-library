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
 * Etat priorite3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEtatPriorite3Trait {

    /**
     * Etat priorite3.
     *
     * @var string
     */
    private $etatPriorite3;

    /**
     * Get the etat priorite3.
     *
     * @return string Returns the etat priorite3.
     */
    public function getEtatPriorite3() {
        return $this->etatPriorite3;
    }

    /**
     * Set the etat priorite3.
     *
     * @param string $etatPriorite3 The etat priorite3.
     */
    public function setEtatPriorite3($etatPriorite3) {
        $this->etatPriorite3 = $etatPriorite3;
        return $this;
    }
}
