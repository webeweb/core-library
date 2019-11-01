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
 * Code lib csg trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeLibCsgTrait {

    /**
     * Code lib csg.
     *
     * @var string
     */
    private $codeLibCsg;

    /**
     * Get the code lib csg.
     *
     * @return string Returns the code lib csg.
     */
    public function getCodeLibCsg() {
        return $this->codeLibCsg;
    }

    /**
     * Set the code lib csg.
     *
     * @param string $codeLibCsg The code lib csg.
     */
    public function setCodeLibCsg($codeLibCsg) {
        $this->codeLibCsg = $codeLibCsg;
        return $this;
    }
}
