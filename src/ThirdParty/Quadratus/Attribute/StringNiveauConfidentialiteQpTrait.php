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
 * Niveau confidentialite qp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNiveauConfidentialiteQpTrait {

    /**
     * Niveau confidentialite qp.
     *
     * @var string
     */
    private $niveauConfidentialiteQp;

    /**
     * Get the niveau confidentialite qp.
     *
     * @return string Returns the niveau confidentialite qp.
     */
    public function getNiveauConfidentialiteQp() {
        return $this->niveauConfidentialiteQp;
    }

    /**
     * Set the niveau confidentialite qp.
     *
     * @param string $niveauConfidentialiteQp The niveau confidentialite qp.
     */
    public function setNiveauConfidentialiteQp($niveauConfidentialiteQp) {
        $this->niveauConfidentialiteQp = $niveauConfidentialiteQp;
        return $this;
    }
}
