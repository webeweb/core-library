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
 * Code assiette sitb trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeAssietteSitbTrait {

    /**
     * Code assiette sitb.
     *
     * @var string
     */
    private $codeAssietteSitb;

    /**
     * Get the code assiette sitb.
     *
     * @return string Returns the code assiette sitb.
     */
    public function getCodeAssietteSitb() {
        return $this->codeAssietteSitb;
    }

    /**
     * Set the code assiette sitb.
     *
     * @param string $codeAssietteSitb The code assiette sitb.
     */
    public function setCodeAssietteSitb($codeAssietteSitb) {
        $this->codeAssietteSitb = $codeAssietteSitb;
        return $this;
    }
}
