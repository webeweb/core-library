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
 * Id carte appel env trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringIdCarteAppelEnvTrait {

    /**
     * Id carte appel env.
     *
     * @var string
     */
    private $idCarteAppelEnv;

    /**
     * Get the id carte appel env.
     *
     * @return string Returns the id carte appel env.
     */
    public function getIdCarteAppelEnv() {
        return $this->idCarteAppelEnv;
    }

    /**
     * Set the id carte appel env.
     *
     * @param string $idCarteAppelEnv The id carte appel env.
     */
    public function setIdCarteAppelEnv($idCarteAppelEnv) {
        $this->idCarteAppelEnv = $idCarteAppelEnv;
        return $this;
    }
}
