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
 * Droit modif trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolDroitModifTrait {

    /**
     * Droit modif.
     *
     * @var bool
     */
    private $droitModif;

    /**
     * Get the droit modif.
     *
     * @return bool Returns the droit modif.
     */
    public function getDroitModif() {
        return $this->droitModif;
    }

    /**
     * Set the droit modif.
     *
     * @param bool $droitModif The droit modif.
     */
    public function setDroitModif($droitModif) {
        $this->droitModif = $droitModif;
        return $this;
    }
}
