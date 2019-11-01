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
 * Fait impot revenu trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFaitImpotRevenuTrait {

    /**
     * Fait impot revenu.
     *
     * @var string
     */
    private $faitImpotRevenu;

    /**
     * Get the fait impot revenu.
     *
     * @return string Returns the fait impot revenu.
     */
    public function getFaitImpotRevenu() {
        return $this->faitImpotRevenu;
    }

    /**
     * Set the fait impot revenu.
     *
     * @param string $faitImpotRevenu The fait impot revenu.
     */
    public function setFaitImpotRevenu($faitImpotRevenu) {
        $this->faitImpotRevenu = $faitImpotRevenu;
        return $this;
    }
}
