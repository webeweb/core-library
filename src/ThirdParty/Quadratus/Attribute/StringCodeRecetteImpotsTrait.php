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
 * Code recette impots trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeRecetteImpotsTrait {

    /**
     * Code recette impots.
     *
     * @var string
     */
    private $codeRecetteImpots;

    /**
     * Get the code recette impots.
     *
     * @return string Returns the code recette impots.
     */
    public function getCodeRecetteImpots() {
        return $this->codeRecetteImpots;
    }

    /**
     * Set the code recette impots.
     *
     * @param string $codeRecetteImpots The code recette impots.
     */
    public function setCodeRecetteImpots($codeRecetteImpots) {
        $this->codeRecetteImpots = $codeRecetteImpots;
        return $this;
    }
}
