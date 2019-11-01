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
 * No doss cpta trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNoDossCptaTrait {

    /**
     * No doss cpta.
     *
     * @var string
     */
    private $noDossCpta;

    /**
     * Get the no doss cpta.
     *
     * @return string Returns the no doss cpta.
     */
    public function getNoDossCpta() {
        return $this->noDossCpta;
    }

    /**
     * Set the no doss cpta.
     *
     * @param string $noDossCpta The no doss cpta.
     */
    public function setNoDossCpta($noDossCpta) {
        $this->noDossCpta = $noDossCpta;
        return $this;
    }
}
