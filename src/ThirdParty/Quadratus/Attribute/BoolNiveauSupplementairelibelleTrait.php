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
 * Niveau supplementairelibelle trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolNiveauSupplementairelibelleTrait {

    /**
     * Niveau supplementairelibelle.
     *
     * @var bool
     */
    private $niveauSupplementairelibelle;

    /**
     * Get the niveau supplementairelibelle.
     *
     * @return bool Returns the niveau supplementairelibelle.
     */
    public function getNiveauSupplementairelibelle() {
        return $this->niveauSupplementairelibelle;
    }

    /**
     * Set the niveau supplementairelibelle.
     *
     * @param bool $niveauSupplementairelibelle The niveau supplementairelibelle.
     */
    public function setNiveauSupplementairelibelle($niveauSupplementairelibelle) {
        $this->niveauSupplementairelibelle = $niveauSupplementairelibelle;
        return $this;
    }
}
