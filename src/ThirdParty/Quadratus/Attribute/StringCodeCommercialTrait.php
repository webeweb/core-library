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
 * Code commercial trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeCommercialTrait {

    /**
     * Code commercial.
     *
     * @var string
     */
    private $codeCommercial;

    /**
     * Get the code commercial.
     *
     * @return string Returns the code commercial.
     */
    public function getCodeCommercial() {
        return $this->codeCommercial;
    }

    /**
     * Set the code commercial.
     *
     * @param string $codeCommercial The code commercial.
     */
    public function setCodeCommercial($codeCommercial) {
        $this->codeCommercial = $codeCommercial;
        return $this;
    }
}
