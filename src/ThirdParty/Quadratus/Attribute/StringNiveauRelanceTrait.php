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
 * Niveau relance trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNiveauRelanceTrait {

    /**
     * Niveau relance.
     *
     * @var string
     */
    private $niveauRelance;

    /**
     * Get the niveau relance.
     *
     * @return string Returns the niveau relance.
     */
    public function getNiveauRelance() {
        return $this->niveauRelance;
    }

    /**
     * Set the niveau relance.
     *
     * @param string $niveauRelance The niveau relance.
     */
    public function setNiveauRelance($niveauRelance) {
        $this->niveauRelance = $niveauRelance;
        return $this;
    }
}
