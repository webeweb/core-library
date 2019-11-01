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
 * Code frais trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeFraisTrait {

    /**
     * Code frais.
     *
     * @var string
     */
    private $codeFrais;

    /**
     * Get the code frais.
     *
     * @return string Returns the code frais.
     */
    public function getCodeFrais() {
        return $this->codeFrais;
    }

    /**
     * Set the code frais.
     *
     * @param string $codeFrais The code frais.
     */
    public function setCodeFrais($codeFrais) {
        $this->codeFrais = $codeFrais;
        return $this;
    }
}
