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
 * Lib critere8 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibCritere8Trait {

    /**
     * Lib critere8.
     *
     * @var string
     */
    private $libCritere8;

    /**
     * Get the lib critere8.
     *
     * @return string Returns the lib critere8.
     */
    public function getLibCritere8() {
        return $this->libCritere8;
    }

    /**
     * Set the lib critere8.
     *
     * @param string $libCritere8 The lib critere8.
     */
    public function setLibCritere8($libCritere8) {
        $this->libCritere8 = $libCritere8;
        return $this;
    }
}
