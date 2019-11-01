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
 * Lib critere txt1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibCritereTxt1Trait {

    /**
     * Lib critere txt1.
     *
     * @var string
     */
    private $libCritereTxt1;

    /**
     * Get the lib critere txt1.
     *
     * @return string Returns the lib critere txt1.
     */
    public function getLibCritereTxt1() {
        return $this->libCritereTxt1;
    }

    /**
     * Set the lib critere txt1.
     *
     * @param string $libCritereTxt1 The lib critere txt1.
     */
    public function setLibCritereTxt1($libCritereTxt1) {
        $this->libCritereTxt1 = $libCritereTxt1;
        return $this;
    }
}
