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
 * Lib critere txt2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibCritereTxt2Trait {

    /**
     * Lib critere txt2.
     *
     * @var string
     */
    private $libCritereTxt2;

    /**
     * Get the lib critere txt2.
     *
     * @return string Returns the lib critere txt2.
     */
    public function getLibCritereTxt2() {
        return $this->libCritereTxt2;
    }

    /**
     * Set the lib critere txt2.
     *
     * @param string $libCritereTxt2 The lib critere txt2.
     */
    public function setLibCritereTxt2($libCritereTxt2) {
        $this->libCritereTxt2 = $libCritereTxt2;
        return $this;
    }
}
