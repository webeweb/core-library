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
 * Lib critere5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibCritere5Trait {

    /**
     * Lib critere5.
     *
     * @var string
     */
    private $libCritere5;

    /**
     * Get the lib critere5.
     *
     * @return string Returns the lib critere5.
     */
    public function getLibCritere5() {
        return $this->libCritere5;
    }

    /**
     * Set the lib critere5.
     *
     * @param string $libCritere5 The lib critere5.
     */
    public function setLibCritere5($libCritere5) {
        $this->libCritere5 = $libCritere5;
        return $this;
    }
}
