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
 * Code assiette sitbagff trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeAssietteSitbagffTrait {

    /**
     * Code assiette sitbagff.
     *
     * @var string
     */
    private $codeAssietteSitbagff;

    /**
     * Get the code assiette sitbagff.
     *
     * @return string Returns the code assiette sitbagff.
     */
    public function getCodeAssietteSitbagff() {
        return $this->codeAssietteSitbagff;
    }

    /**
     * Set the code assiette sitbagff.
     *
     * @param string $codeAssietteSitbagff The code assiette sitbagff.
     */
    public function setCodeAssietteSitbagff($codeAssietteSitbagff) {
        $this->codeAssietteSitbagff = $codeAssietteSitbagff;
        return $this;
    }
}
