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
 * Regime mixte msa trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolRegimeMixteMsaTrait {

    /**
     * Regime mixte msa.
     *
     * @var bool
     */
    private $regimeMixteMsa;

    /**
     * Get the regime mixte msa.
     *
     * @return bool Returns the regime mixte msa.
     */
    public function getRegimeMixteMsa() {
        return $this->regimeMixteMsa;
    }

    /**
     * Set the regime mixte msa.
     *
     * @param bool $regimeMixteMsa The regime mixte msa.
     */
    public function setRegimeMixteMsa($regimeMixteMsa) {
        $this->regimeMixteMsa = $regimeMixteMsa;
        return $this;
    }
}
