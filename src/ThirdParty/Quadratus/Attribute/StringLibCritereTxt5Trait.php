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
 * Lib critere txt5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibCritereTxt5Trait {

    /**
     * Lib critere txt5.
     *
     * @var string
     */
    private $libCritereTxt5;

    /**
     * Get the lib critere txt5.
     *
     * @return string Returns the lib critere txt5.
     */
    public function getLibCritereTxt5() {
        return $this->libCritereTxt5;
    }

    /**
     * Set the lib critere txt5.
     *
     * @param string $libCritereTxt5 The lib critere txt5.
     */
    public function setLibCritereTxt5($libCritereTxt5) {
        $this->libCritereTxt5 = $libCritereTxt5;
        return $this;
    }
}
