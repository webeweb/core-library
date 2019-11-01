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
 * Code scolarise trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeScolariseTrait {

    /**
     * Code scolarise.
     *
     * @var string
     */
    private $codeScolarise;

    /**
     * Get the code scolarise.
     *
     * @return string Returns the code scolarise.
     */
    public function getCodeScolarise() {
        return $this->codeScolarise;
    }

    /**
     * Set the code scolarise.
     *
     * @param string $codeScolarise The code scolarise.
     */
    public function setCodeScolarise($codeScolarise) {
        $this->codeScolarise = $codeScolarise;
        return $this;
    }
}
