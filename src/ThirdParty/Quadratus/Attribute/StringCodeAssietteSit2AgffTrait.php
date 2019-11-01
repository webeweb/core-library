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
 * Code assiette sit2 agff trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeAssietteSit2AgffTrait {

    /**
     * Code assiette sit2 agff.
     *
     * @var string
     */
    private $codeAssietteSit2Agff;

    /**
     * Get the code assiette sit2 agff.
     *
     * @return string Returns the code assiette sit2 agff.
     */
    public function getCodeAssietteSit2Agff() {
        return $this->codeAssietteSit2Agff;
    }

    /**
     * Set the code assiette sit2 agff.
     *
     * @param string $codeAssietteSit2Agff The code assiette sit2 agff.
     */
    public function setCodeAssietteSit2Agff($codeAssietteSit2Agff) {
        $this->codeAssietteSit2Agff = $codeAssietteSit2Agff;
        return $this;
    }
}
