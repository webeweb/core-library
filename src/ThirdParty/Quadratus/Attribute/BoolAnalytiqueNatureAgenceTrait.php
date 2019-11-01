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
 * Analytique nature agence trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAnalytiqueNatureAgenceTrait {

    /**
     * Analytique nature agence.
     *
     * @var bool
     */
    private $analytiqueNatureAgence;

    /**
     * Get the analytique nature agence.
     *
     * @return bool Returns the analytique nature agence.
     */
    public function getAnalytiqueNatureAgence() {
        return $this->analytiqueNatureAgence;
    }

    /**
     * Set the analytique nature agence.
     *
     * @param bool $analytiqueNatureAgence The analytique nature agence.
     */
    public function setAnalytiqueNatureAgence($analytiqueNatureAgence) {
        $this->analytiqueNatureAgence = $analytiqueNatureAgence;
        return $this;
    }
}
