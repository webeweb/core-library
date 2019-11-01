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
 * Id carte appel env3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringIdCarteAppelEnv3Trait {

    /**
     * Id carte appel env3.
     *
     * @var string
     */
    private $idCarteAppelEnv3;

    /**
     * Get the id carte appel env3.
     *
     * @return string Returns the id carte appel env3.
     */
    public function getIdCarteAppelEnv3() {
        return $this->idCarteAppelEnv3;
    }

    /**
     * Set the id carte appel env3.
     *
     * @param string $idCarteAppelEnv3 The id carte appel env3.
     */
    public function setIdCarteAppelEnv3($idCarteAppelEnv3) {
        $this->idCarteAppelEnv3 = $idCarteAppelEnv3;
        return $this;
    }
}
