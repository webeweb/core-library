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
 * Niveau droit10 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNiveauDroit10Trait {

    /**
     * Niveau droit10.
     *
     * @var string
     */
    private $niveauDroit10;

    /**
     * Get the niveau droit10.
     *
     * @return string Returns the niveau droit10.
     */
    public function getNiveauDroit10() {
        return $this->niveauDroit10;
    }

    /**
     * Set the niveau droit10.
     *
     * @param string $niveauDroit10 The niveau droit10.
     */
    public function setNiveauDroit10($niveauDroit10) {
        $this->niveauDroit10 = $niveauDroit10;
        return $this;
    }
}
