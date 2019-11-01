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
 * Frais ps euro ou franc trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFraisPsEuroOuFrancTrait {

    /**
     * Frais ps euro ou franc.
     *
     * @var string
     */
    private $fraisPsEuroOuFranc;

    /**
     * Get the frais ps euro ou franc.
     *
     * @return string Returns the frais ps euro ou franc.
     */
    public function getFraisPsEuroOuFranc() {
        return $this->fraisPsEuroOuFranc;
    }

    /**
     * Set the frais ps euro ou franc.
     *
     * @param string $fraisPsEuroOuFranc The frais ps euro ou franc.
     */
    public function setFraisPsEuroOuFranc($fraisPsEuroOuFranc) {
        $this->fraisPsEuroOuFranc = $fraisPsEuroOuFranc;
        return $this;
    }
}
