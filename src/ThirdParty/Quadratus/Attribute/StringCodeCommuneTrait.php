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
 * Code commune trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeCommuneTrait {

    /**
     * Code commune.
     *
     * @var string
     */
    private $codeCommune;

    /**
     * Get the code commune.
     *
     * @return string Returns the code commune.
     */
    public function getCodeCommune() {
        return $this->codeCommune;
    }

    /**
     * Set the code commune.
     *
     * @param string $codeCommune The code commune.
     */
    public function setCodeCommune($codeCommune) {
        $this->codeCommune = $codeCommune;
        return $this;
    }
}
