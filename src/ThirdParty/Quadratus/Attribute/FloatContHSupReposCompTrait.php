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
 * Cont h sup repos comp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatContHSupReposCompTrait {

    /**
     * Cont h sup repos comp.
     *
     * @var float
     */
    private $contHSupReposComp;

    /**
     * Get the cont h sup repos comp.
     *
     * @return float Returns the cont h sup repos comp.
     */
    public function getContHSupReposComp() {
        return $this->contHSupReposComp;
    }

    /**
     * Set the cont h sup repos comp.
     *
     * @param float $contHSupReposComp The cont h sup repos comp.
     */
    public function setContHSupReposComp($contHSupReposComp) {
        $this->contHSupReposComp = $contHSupReposComp;
        return $this;
    }
}
