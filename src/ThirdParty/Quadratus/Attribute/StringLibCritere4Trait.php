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
 * Lib critere4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibCritere4Trait {

    /**
     * Lib critere4.
     *
     * @var string
     */
    private $libCritere4;

    /**
     * Get the lib critere4.
     *
     * @return string Returns the lib critere4.
     */
    public function getLibCritere4() {
        return $this->libCritere4;
    }

    /**
     * Set the lib critere4.
     *
     * @param string $libCritere4 The lib critere4.
     */
    public function setLibCritere4($libCritere4) {
        $this->libCritere4 = $libCritere4;
        return $this;
    }
}
