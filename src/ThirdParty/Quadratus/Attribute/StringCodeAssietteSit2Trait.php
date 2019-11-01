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
 * Code assiette sit2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeAssietteSit2Trait {

    /**
     * Code assiette sit2.
     *
     * @var string
     */
    private $codeAssietteSit2;

    /**
     * Get the code assiette sit2.
     *
     * @return string Returns the code assiette sit2.
     */
    public function getCodeAssietteSit2() {
        return $this->codeAssietteSit2;
    }

    /**
     * Set the code assiette sit2.
     *
     * @param string $codeAssietteSit2 The code assiette sit2.
     */
    public function setCodeAssietteSit2($codeAssietteSit2) {
        $this->codeAssietteSit2 = $codeAssietteSit2;
        return $this;
    }
}
