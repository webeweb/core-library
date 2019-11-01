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
 * Code ics trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeIcsTrait {

    /**
     * Code ics.
     *
     * @var string
     */
    private $codeIcs;

    /**
     * Get the code ics.
     *
     * @return string Returns the code ics.
     */
    public function getCodeIcs() {
        return $this->codeIcs;
    }

    /**
     * Set the code ics.
     *
     * @param string $codeIcs The code ics.
     */
    public function setCodeIcs($codeIcs) {
        $this->codeIcs = $codeIcs;
        return $this;
    }
}
