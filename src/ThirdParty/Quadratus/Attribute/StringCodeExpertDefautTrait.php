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
 * Code expert defaut trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeExpertDefautTrait {

    /**
     * Code expert defaut.
     *
     * @var string
     */
    private $codeExpertDefaut;

    /**
     * Get the code expert defaut.
     *
     * @return string Returns the code expert defaut.
     */
    public function getCodeExpertDefaut() {
        return $this->codeExpertDefaut;
    }

    /**
     * Set the code expert defaut.
     *
     * @param string $codeExpertDefaut The code expert defaut.
     */
    public function setCodeExpertDefaut($codeExpertDefaut) {
        $this->codeExpertDefaut = $codeExpertDefaut;
        return $this;
    }
}
