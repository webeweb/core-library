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
 * Conditionnement trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringConditionnementTrait {

    /**
     * Conditionnement.
     *
     * @var string
     */
    private $conditionnement;

    /**
     * Get the conditionnement.
     *
     * @return string Returns the conditionnement.
     */
    public function getConditionnement() {
        return $this->conditionnement;
    }

    /**
     * Set the conditionnement.
     *
     * @param string $conditionnement The conditionnement.
     */
    public function setConditionnement($conditionnement) {
        $this->conditionnement = $conditionnement;
        return $this;
    }
}
