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
 * Type critere couleur bt trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeCritereCouleurBtTrait {

    /**
     * Type critere couleur bt.
     *
     * @var string
     */
    private $typeCritereCouleurBt;

    /**
     * Get the type critere couleur bt.
     *
     * @return string Returns the type critere couleur bt.
     */
    public function getTypeCritereCouleurBt() {
        return $this->typeCritereCouleurBt;
    }

    /**
     * Set the type critere couleur bt.
     *
     * @param string $typeCritereCouleurBt The type critere couleur bt.
     */
    public function setTypeCritereCouleurBt($typeCritereCouleurBt) {
        $this->typeCritereCouleurBt = $typeCritereCouleurBt;
        return $this;
    }
}
