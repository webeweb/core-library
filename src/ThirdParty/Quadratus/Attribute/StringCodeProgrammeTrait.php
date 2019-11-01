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
 * Code programme trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeProgrammeTrait {

    /**
     * Code programme.
     *
     * @var string
     */
    private $codeProgramme;

    /**
     * Get the code programme.
     *
     * @return string Returns the code programme.
     */
    public function getCodeProgramme() {
        return $this->codeProgramme;
    }

    /**
     * Set the code programme.
     *
     * @param string $codeProgramme The code programme.
     */
    public function setCodeProgramme($codeProgramme) {
        $this->codeProgramme = $codeProgramme;
        return $this;
    }
}
