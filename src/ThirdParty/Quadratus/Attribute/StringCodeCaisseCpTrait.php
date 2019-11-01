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
 * Code caisse cp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeCaisseCpTrait {

    /**
     * Code caisse cp.
     *
     * @var string
     */
    private $codeCaisseCp;

    /**
     * Get the code caisse cp.
     *
     * @return string Returns the code caisse cp.
     */
    public function getCodeCaisseCp() {
        return $this->codeCaisseCp;
    }

    /**
     * Set the code caisse cp.
     *
     * @param string $codeCaisseCp The code caisse cp.
     */
    public function setCodeCaisseCp($codeCaisseCp) {
        $this->codeCaisseCp = $codeCaisseCp;
        return $this;
    }
}
