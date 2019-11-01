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
 * Lib critere txt4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibCritereTxt4Trait {

    /**
     * Lib critere txt4.
     *
     * @var string
     */
    private $libCritereTxt4;

    /**
     * Get the lib critere txt4.
     *
     * @return string Returns the lib critere txt4.
     */
    public function getLibCritereTxt4() {
        return $this->libCritereTxt4;
    }

    /**
     * Set the lib critere txt4.
     *
     * @param string $libCritereTxt4 The lib critere txt4.
     */
    public function setLibCritereTxt4($libCritereTxt4) {
        $this->libCritereTxt4 = $libCritereTxt4;
        return $this;
    }
}
