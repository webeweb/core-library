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
 * Code nature trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeNatureTrait {

    /**
     * Code nature.
     *
     * @var string
     */
    private $codeNature;

    /**
     * Get the code nature.
     *
     * @return string Returns the code nature.
     */
    public function getCodeNature() {
        return $this->codeNature;
    }

    /**
     * Set the code nature.
     *
     * @param string $codeNature The code nature.
     */
    public function setCodeNature($codeNature) {
        $this->codeNature = $codeNature;
        return $this;
    }
}
