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
 * Code nature base cotisations trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeNatureBaseCotisationsTrait {

    /**
     * Code nature base cotisations.
     *
     * @var string
     */
    private $codeNatureBaseCotisations;

    /**
     * Get the code nature base cotisations.
     *
     * @return string Returns the code nature base cotisations.
     */
    public function getCodeNatureBaseCotisations() {
        return $this->codeNatureBaseCotisations;
    }

    /**
     * Set the code nature base cotisations.
     *
     * @param string $codeNatureBaseCotisations The code nature base cotisations.
     */
    public function setCodeNatureBaseCotisations($codeNatureBaseCotisations) {
        $this->codeNatureBaseCotisations = $codeNatureBaseCotisations;
        return $this;
    }
}
