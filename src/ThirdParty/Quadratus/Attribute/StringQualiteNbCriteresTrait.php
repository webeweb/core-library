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
 * Qualite nb criteres trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringQualiteNbCriteresTrait {

    /**
     * Qualite nb criteres.
     *
     * @var string
     */
    private $qualiteNbCriteres;

    /**
     * Get the qualite nb criteres.
     *
     * @return string Returns the qualite nb criteres.
     */
    public function getQualiteNbCriteres() {
        return $this->qualiteNbCriteres;
    }

    /**
     * Set the qualite nb criteres.
     *
     * @param string $qualiteNbCriteres The qualite nb criteres.
     */
    public function setQualiteNbCriteres($qualiteNbCriteres) {
        $this->qualiteNbCriteres = $qualiteNbCriteres;
        return $this;
    }
}
