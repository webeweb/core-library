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
 * Niveau qualif trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNiveauQualifTrait {

    /**
     * Niveau qualif.
     *
     * @var string
     */
    private $niveauQualif;

    /**
     * Get the niveau qualif.
     *
     * @return string Returns the niveau qualif.
     */
    public function getNiveauQualif() {
        return $this->niveauQualif;
    }

    /**
     * Set the niveau qualif.
     *
     * @param string $niveauQualif The niveau qualif.
     */
    public function setNiveauQualif($niveauQualif) {
        $this->niveauQualif = $niveauQualif;
        return $this;
    }
}
