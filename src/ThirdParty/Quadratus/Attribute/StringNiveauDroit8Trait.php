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
 * Niveau droit8 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNiveauDroit8Trait {

    /**
     * Niveau droit8.
     *
     * @var string
     */
    private $niveauDroit8;

    /**
     * Get the niveau droit8.
     *
     * @return string Returns the niveau droit8.
     */
    public function getNiveauDroit8() {
        return $this->niveauDroit8;
    }

    /**
     * Set the niveau droit8.
     *
     * @param string $niveauDroit8 The niveau droit8.
     */
    public function setNiveauDroit8($niveauDroit8) {
        $this->niveauDroit8 = $niveauDroit8;
        return $this;
    }
}
