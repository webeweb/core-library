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
 * Num programme trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNumProgrammeTrait {

    /**
     * Num programme.
     *
     * @var int
     */
    private $numProgramme;

    /**
     * Get the num programme.
     *
     * @return int Returns the num programme.
     */
    public function getNumProgramme() {
        return $this->numProgramme;
    }

    /**
     * Set the num programme.
     *
     * @param int $numProgramme The num programme.
     */
    public function setNumProgramme($numProgramme) {
        $this->numProgramme = $numProgramme;
        return $this;
    }
}
