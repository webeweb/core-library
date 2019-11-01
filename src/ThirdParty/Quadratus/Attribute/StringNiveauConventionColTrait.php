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
 * Niveau convention col trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNiveauConventionColTrait {

    /**
     * Niveau convention col.
     *
     * @var string
     */
    private $niveauConventionCol;

    /**
     * Get the niveau convention col.
     *
     * @return string Returns the niveau convention col.
     */
    public function getNiveauConventionCol() {
        return $this->niveauConventionCol;
    }

    /**
     * Set the niveau convention col.
     *
     * @param string $niveauConventionCol The niveau convention col.
     */
    public function setNiveauConventionCol($niveauConventionCol) {
        $this->niveauConventionCol = $niveauConventionCol;
        return $this;
    }
}
