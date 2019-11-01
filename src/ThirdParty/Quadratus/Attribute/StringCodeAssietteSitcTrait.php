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
 * Code assiette sitc trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeAssietteSitcTrait {

    /**
     * Code assiette sitc.
     *
     * @var string
     */
    private $codeAssietteSitc;

    /**
     * Get the code assiette sitc.
     *
     * @return string Returns the code assiette sitc.
     */
    public function getCodeAssietteSitc() {
        return $this->codeAssietteSitc;
    }

    /**
     * Set the code assiette sitc.
     *
     * @param string $codeAssietteSitc The code assiette sitc.
     */
    public function setCodeAssietteSitc($codeAssietteSitc) {
        $this->codeAssietteSitc = $codeAssietteSitc;
        return $this;
    }
}
