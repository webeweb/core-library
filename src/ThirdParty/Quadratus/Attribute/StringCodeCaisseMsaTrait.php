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
 * Code caisse msa trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeCaisseMsaTrait {

    /**
     * Code caisse msa.
     *
     * @var string
     */
    private $codeCaisseMsa;

    /**
     * Get the code caisse msa.
     *
     * @return string Returns the code caisse msa.
     */
    public function getCodeCaisseMsa() {
        return $this->codeCaisseMsa;
    }

    /**
     * Set the code caisse msa.
     *
     * @param string $codeCaisseMsa The code caisse msa.
     */
    public function setCodeCaisseMsa($codeCaisseMsa) {
        $this->codeCaisseMsa = $codeCaisseMsa;
        return $this;
    }
}
