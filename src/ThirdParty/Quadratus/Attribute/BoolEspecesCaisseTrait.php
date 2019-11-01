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
 * Especes caisse trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolEspecesCaisseTrait {

    /**
     * Especes caisse.
     *
     * @var bool
     */
    private $especesCaisse;

    /**
     * Get the especes caisse.
     *
     * @return bool Returns the especes caisse.
     */
    public function getEspecesCaisse() {
        return $this->especesCaisse;
    }

    /**
     * Set the especes caisse.
     *
     * @param bool $especesCaisse The especes caisse.
     */
    public function setEspecesCaisse($especesCaisse) {
        $this->especesCaisse = $especesCaisse;
        return $this;
    }
}
