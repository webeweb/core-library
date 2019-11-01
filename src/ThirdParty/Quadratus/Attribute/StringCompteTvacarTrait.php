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
 * Compte tvacar trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCompteTvacarTrait {

    /**
     * Compte tvacar.
     *
     * @var string
     */
    private $compteTvacar;

    /**
     * Get the compte tvacar.
     *
     * @return string Returns the compte tvacar.
     */
    public function getCompteTvacar() {
        return $this->compteTvacar;
    }

    /**
     * Set the compte tvacar.
     *
     * @param string $compteTvacar The compte tvacar.
     */
    public function setCompteTvacar($compteTvacar) {
        $this->compteTvacar = $compteTvacar;
        return $this;
    }
}
