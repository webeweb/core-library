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
 * No doss trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNoDossTrait {

    /**
     * No doss.
     *
     * @var string
     */
    private $noDoss;

    /**
     * Get the no doss.
     *
     * @return string Returns the no doss.
     */
    public function getNoDoss() {
        return $this->noDoss;
    }

    /**
     * Set the no doss.
     *
     * @param string $noDoss The no doss.
     */
    public function setNoDoss($noDoss) {
        $this->noDoss = $noDoss;
        return $this;
    }
}
