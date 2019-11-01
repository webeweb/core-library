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
 * Cas particulier trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCasParticulierTrait {

    /**
     * Cas particulier.
     *
     * @var bool
     */
    private $casParticulier;

    /**
     * Get the cas particulier.
     *
     * @return bool Returns the cas particulier.
     */
    public function getCasParticulier() {
        return $this->casParticulier;
    }

    /**
     * Set the cas particulier.
     *
     * @param bool $casParticulier The cas particulier.
     */
    public function setCasParticulier($casParticulier) {
        $this->casParticulier = $casParticulier;
        return $this;
    }
}
