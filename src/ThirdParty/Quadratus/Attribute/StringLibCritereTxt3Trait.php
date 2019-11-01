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
 * Lib critere txt3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibCritereTxt3Trait {

    /**
     * Lib critere txt3.
     *
     * @var string
     */
    private $libCritereTxt3;

    /**
     * Get the lib critere txt3.
     *
     * @return string Returns the lib critere txt3.
     */
    public function getLibCritereTxt3() {
        return $this->libCritereTxt3;
    }

    /**
     * Set the lib critere txt3.
     *
     * @param string $libCritereTxt3 The lib critere txt3.
     */
    public function setLibCritereTxt3($libCritereTxt3) {
        $this->libCritereTxt3 = $libCritereTxt3;
        return $this;
    }
}
