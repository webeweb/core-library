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
 * Cdi nom voie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCdiNomVoieTrait {

    /**
     * Cdi nom voie.
     *
     * @var string
     */
    private $cdiNomVoie;

    /**
     * Get the cdi nom voie.
     *
     * @return string Returns the cdi nom voie.
     */
    public function getCdiNomVoie() {
        return $this->cdiNomVoie;
    }

    /**
     * Set the cdi nom voie.
     *
     * @param string $cdiNomVoie The cdi nom voie.
     */
    public function setCdiNomVoie($cdiNomVoie) {
        $this->cdiNomVoie = $cdiNomVoie;
        return $this;
    }
}
