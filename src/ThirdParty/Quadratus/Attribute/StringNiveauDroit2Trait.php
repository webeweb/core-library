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
 * Niveau droit2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNiveauDroit2Trait {

    /**
     * Niveau droit2.
     *
     * @var string
     */
    private $niveauDroit2;

    /**
     * Get the niveau droit2.
     *
     * @return string Returns the niveau droit2.
     */
    public function getNiveauDroit2() {
        return $this->niveauDroit2;
    }

    /**
     * Set the niveau droit2.
     *
     * @param string $niveauDroit2 The niveau droit2.
     */
    public function setNiveauDroit2($niveauDroit2) {
        $this->niveauDroit2 = $niveauDroit2;
        return $this;
    }
}
