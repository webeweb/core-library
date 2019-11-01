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
 * Decl tva insp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDeclTvaInspTrait {

    /**
     * Decl tva insp.
     *
     * @var string
     */
    private $declTvaInsp;

    /**
     * Get the decl tva insp.
     *
     * @return string Returns the decl tva insp.
     */
    public function getDeclTvaInsp() {
        return $this->declTvaInsp;
    }

    /**
     * Set the decl tva insp.
     *
     * @param string $declTvaInsp The decl tva insp.
     */
    public function setDeclTvaInsp($declTvaInsp) {
        $this->declTvaInsp = $declTvaInsp;
        return $this;
    }
}
