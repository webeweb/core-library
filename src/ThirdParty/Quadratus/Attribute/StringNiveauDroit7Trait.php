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
 * Niveau droit7 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNiveauDroit7Trait {

    /**
     * Niveau droit7.
     *
     * @var string
     */
    private $niveauDroit7;

    /**
     * Get the niveau droit7.
     *
     * @return string Returns the niveau droit7.
     */
    public function getNiveauDroit7() {
        return $this->niveauDroit7;
    }

    /**
     * Set the niveau droit7.
     *
     * @param string $niveauDroit7 The niveau droit7.
     */
    public function setNiveauDroit7($niveauDroit7) {
        $this->niveauDroit7 = $niveauDroit7;
        return $this;
    }
}
