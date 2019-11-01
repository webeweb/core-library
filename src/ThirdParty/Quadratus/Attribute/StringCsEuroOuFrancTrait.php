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
 * Cs euro ou franc trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCsEuroOuFrancTrait {

    /**
     * Cs euro ou franc.
     *
     * @var string
     */
    private $csEuroOuFranc;

    /**
     * Get the cs euro ou franc.
     *
     * @return string Returns the cs euro ou franc.
     */
    public function getCsEuroOuFranc() {
        return $this->csEuroOuFranc;
    }

    /**
     * Set the cs euro ou franc.
     *
     * @param string $csEuroOuFranc The cs euro ou franc.
     */
    public function setCsEuroOuFranc($csEuroOuFranc) {
        $this->csEuroOuFranc = $csEuroOuFranc;
        return $this;
    }
}
