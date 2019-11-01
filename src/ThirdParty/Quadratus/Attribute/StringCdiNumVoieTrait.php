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
 * Cdi num voie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCdiNumVoieTrait {

    /**
     * Cdi num voie.
     *
     * @var string
     */
    private $cdiNumVoie;

    /**
     * Get the cdi num voie.
     *
     * @return string Returns the cdi num voie.
     */
    public function getCdiNumVoie() {
        return $this->cdiNumVoie;
    }

    /**
     * Set the cdi num voie.
     *
     * @param string $cdiNumVoie The cdi num voie.
     */
    public function setCdiNumVoie($cdiNumVoie) {
        $this->cdiNumVoie = $cdiNumVoie;
        return $this;
    }
}
