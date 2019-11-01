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
 * Id carte appel env2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringIdCarteAppelEnv2Trait {

    /**
     * Id carte appel env2.
     *
     * @var string
     */
    private $idCarteAppelEnv2;

    /**
     * Get the id carte appel env2.
     *
     * @return string Returns the id carte appel env2.
     */
    public function getIdCarteAppelEnv2() {
        return $this->idCarteAppelEnv2;
    }

    /**
     * Set the id carte appel env2.
     *
     * @param string $idCarteAppelEnv2 The id carte appel env2.
     */
    public function setIdCarteAppelEnv2($idCarteAppelEnv2) {
        $this->idCarteAppelEnv2 = $idCarteAppelEnv2;
        return $this;
    }
}
