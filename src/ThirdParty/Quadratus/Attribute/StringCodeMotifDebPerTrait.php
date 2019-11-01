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
 * Code motif deb per trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeMotifDebPerTrait {

    /**
     * Code motif deb per.
     *
     * @var string
     */
    private $codeMotifDebPer;

    /**
     * Get the code motif deb per.
     *
     * @return string Returns the code motif deb per.
     */
    public function getCodeMotifDebPer() {
        return $this->codeMotifDebPer;
    }

    /**
     * Set the code motif deb per.
     *
     * @param string $codeMotifDebPer The code motif deb per.
     */
    public function setCodeMotifDebPer($codeMotifDebPer) {
        $this->codeMotifDebPer = $codeMotifDebPer;
        return $this;
    }
}
