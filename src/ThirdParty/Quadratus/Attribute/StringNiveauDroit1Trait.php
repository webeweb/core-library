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
 * Niveau droit1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNiveauDroit1Trait {

    /**
     * Niveau droit1.
     *
     * @var string
     */
    private $niveauDroit1;

    /**
     * Get the niveau droit1.
     *
     * @return string Returns the niveau droit1.
     */
    public function getNiveauDroit1() {
        return $this->niveauDroit1;
    }

    /**
     * Set the niveau droit1.
     *
     * @param string $niveauDroit1 The niveau droit1.
     */
    public function setNiveauDroit1($niveauDroit1) {
        $this->niveauDroit1 = $niveauDroit1;
        return $this;
    }
}
