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
 * Code avocat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeAvocatTrait {

    /**
     * Code avocat.
     *
     * @var string
     */
    private $codeAvocat;

    /**
     * Get the code avocat.
     *
     * @return string Returns the code avocat.
     */
    public function getCodeAvocat() {
        return $this->codeAvocat;
    }

    /**
     * Set the code avocat.
     *
     * @param string $codeAvocat The code avocat.
     */
    public function setCodeAvocat($codeAvocat) {
        $this->codeAvocat = $codeAvocat;
        return $this;
    }
}
