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
 * Ps euro ou franc trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringPsEuroOuFrancTrait {

    /**
     * Ps euro ou franc.
     *
     * @var string
     */
    private $psEuroOuFranc;

    /**
     * Get the ps euro ou franc.
     *
     * @return string Returns the ps euro ou franc.
     */
    public function getPsEuroOuFranc() {
        return $this->psEuroOuFranc;
    }

    /**
     * Set the ps euro ou franc.
     *
     * @param string $psEuroOuFranc The ps euro ou franc.
     */
    public function setPsEuroOuFranc($psEuroOuFranc) {
        $this->psEuroOuFranc = $psEuroOuFranc;
        return $this;
    }
}
