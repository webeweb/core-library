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
 * Niveau ligne trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNiveauLigneTrait {

    /**
     * Niveau ligne.
     *
     * @var int
     */
    private $niveauLigne;

    /**
     * Get the niveau ligne.
     *
     * @return int Returns the niveau ligne.
     */
    public function getNiveauLigne() {
        return $this->niveauLigne;
    }

    /**
     * Set the niveau ligne.
     *
     * @param int $niveauLigne The niveau ligne.
     */
    public function setNiveauLigne($niveauLigne) {
        $this->niveauLigne = $niveauLigne;
        return $this;
    }
}
