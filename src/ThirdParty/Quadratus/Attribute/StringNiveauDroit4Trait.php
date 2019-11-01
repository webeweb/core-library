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
 * Niveau droit4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNiveauDroit4Trait {

    /**
     * Niveau droit4.
     *
     * @var string
     */
    private $niveauDroit4;

    /**
     * Get the niveau droit4.
     *
     * @return string Returns the niveau droit4.
     */
    public function getNiveauDroit4() {
        return $this->niveauDroit4;
    }

    /**
     * Set the niveau droit4.
     *
     * @param string $niveauDroit4 The niveau droit4.
     */
    public function setNiveauDroit4($niveauDroit4) {
        $this->niveauDroit4 = $niveauDroit4;
        return $this;
    }
}
