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
 * Mt cg euro ou franc trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMtCgEuroOuFrancTrait {

    /**
     * Mt cg euro ou franc.
     *
     * @var string
     */
    private $mtCgEuroOuFranc;

    /**
     * Get the mt cg euro ou franc.
     *
     * @return string Returns the mt cg euro ou franc.
     */
    public function getMtCgEuroOuFranc() {
        return $this->mtCgEuroOuFranc;
    }

    /**
     * Set the mt cg euro ou franc.
     *
     * @param string $mtCgEuroOuFranc The mt cg euro ou franc.
     */
    public function setMtCgEuroOuFranc($mtCgEuroOuFranc) {
        $this->mtCgEuroOuFranc = $mtCgEuroOuFranc;
        return $this;
    }
}
