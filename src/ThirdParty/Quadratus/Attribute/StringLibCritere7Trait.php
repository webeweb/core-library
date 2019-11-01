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
 * Lib critere7 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibCritere7Trait {

    /**
     * Lib critere7.
     *
     * @var string
     */
    private $libCritere7;

    /**
     * Get the lib critere7.
     *
     * @return string Returns the lib critere7.
     */
    public function getLibCritere7() {
        return $this->libCritere7;
    }

    /**
     * Set the lib critere7.
     *
     * @param string $libCritere7 The lib critere7.
     */
    public function setLibCritere7($libCritere7) {
        $this->libCritere7 = $libCritere7;
        return $this;
    }
}
