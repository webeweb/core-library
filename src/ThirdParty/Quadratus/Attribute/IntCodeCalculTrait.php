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
 * Code calcul trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntCodeCalculTrait {

    /**
     * Code calcul.
     *
     * @var int
     */
    private $codeCalcul;

    /**
     * Get the code calcul.
     *
     * @return int Returns the code calcul.
     */
    public function getCodeCalcul() {
        return $this->codeCalcul;
    }

    /**
     * Set the code calcul.
     *
     * @param int $codeCalcul The code calcul.
     */
    public function setCodeCalcul($codeCalcul) {
        $this->codeCalcul = $codeCalcul;
        return $this;
    }
}
