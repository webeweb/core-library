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
 * Lib critere1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibCritere1Trait {

    /**
     * Lib critere1.
     *
     * @var string
     */
    private $libCritere1;

    /**
     * Get the lib critere1.
     *
     * @return string Returns the lib critere1.
     */
    public function getLibCritere1() {
        return $this->libCritere1;
    }

    /**
     * Set the lib critere1.
     *
     * @param string $libCritere1 The lib critere1.
     */
    public function setLibCritere1($libCritere1) {
        $this->libCritere1 = $libCritere1;
        return $this;
    }
}
