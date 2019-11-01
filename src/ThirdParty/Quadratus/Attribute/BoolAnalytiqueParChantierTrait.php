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
 * Analytique par chantier trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAnalytiqueParChantierTrait {

    /**
     * Analytique par chantier.
     *
     * @var bool
     */
    private $analytiqueParChantier;

    /**
     * Get the analytique par chantier.
     *
     * @return bool Returns the analytique par chantier.
     */
    public function getAnalytiqueParChantier() {
        return $this->analytiqueParChantier;
    }

    /**
     * Set the analytique par chantier.
     *
     * @param bool $analytiqueParChantier The analytique par chantier.
     */
    public function setAnalytiqueParChantier($analytiqueParChantier) {
        $this->analytiqueParChantier = $analytiqueParChantier;
        return $this;
    }
}
