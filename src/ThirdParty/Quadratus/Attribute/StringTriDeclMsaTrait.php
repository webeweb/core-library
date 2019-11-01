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
 * Tri decl msa trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTriDeclMsaTrait {

    /**
     * Tri decl msa.
     *
     * @var string
     */
    private $triDeclMsa;

    /**
     * Get the tri decl msa.
     *
     * @return string Returns the tri decl msa.
     */
    public function getTriDeclMsa() {
        return $this->triDeclMsa;
    }

    /**
     * Set the tri decl msa.
     *
     * @param string $triDeclMsa The tri decl msa.
     */
    public function setTriDeclMsa($triDeclMsa) {
        $this->triDeclMsa = $triDeclMsa;
        return $this;
    }
}
