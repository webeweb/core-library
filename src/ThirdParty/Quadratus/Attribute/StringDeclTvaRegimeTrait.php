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
 * Decl tva regime trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDeclTvaRegimeTrait {

    /**
     * Decl tva regime.
     *
     * @var string
     */
    private $declTvaRegime;

    /**
     * Get the decl tva regime.
     *
     * @return string Returns the decl tva regime.
     */
    public function getDeclTvaRegime() {
        return $this->declTvaRegime;
    }

    /**
     * Set the decl tva regime.
     *
     * @param string $declTvaRegime The decl tva regime.
     */
    public function setDeclTvaRegime($declTvaRegime) {
        $this->declTvaRegime = $declTvaRegime;
        return $this;
    }
}
