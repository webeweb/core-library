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
 * Code manif trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeManifTrait {

    /**
     * Code manif.
     *
     * @var string
     */
    private $codeManif;

    /**
     * Get the code manif.
     *
     * @return string Returns the code manif.
     */
    public function getCodeManif() {
        return $this->codeManif;
    }

    /**
     * Set the code manif.
     *
     * @param string $codeManif The code manif.
     */
    public function setCodeManif($codeManif) {
        $this->codeManif = $codeManif;
        return $this;
    }
}
