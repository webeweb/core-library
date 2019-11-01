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
 * Droit modif compte trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDroitModifCompteTrait {

    /**
     * Droit modif compte.
     *
     * @var string
     */
    private $droitModifCompte;

    /**
     * Get the droit modif compte.
     *
     * @return string Returns the droit modif compte.
     */
    public function getDroitModifCompte() {
        return $this->droitModifCompte;
    }

    /**
     * Set the droit modif compte.
     *
     * @param string $droitModifCompte The droit modif compte.
     */
    public function setDroitModifCompte($droitModifCompte) {
        $this->droitModifCompte = $droitModifCompte;
        return $this;
    }
}
