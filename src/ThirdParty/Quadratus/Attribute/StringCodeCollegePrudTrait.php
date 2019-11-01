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
 * Code college prud trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeCollegePrudTrait {

    /**
     * Code college prud.
     *
     * @var string
     */
    private $codeCollegePrud;

    /**
     * Get the code college prud.
     *
     * @return string Returns the code college prud.
     */
    public function getCodeCollegePrud() {
        return $this->codeCollegePrud;
    }

    /**
     * Set the code college prud.
     *
     * @param string $codeCollegePrud The code college prud.
     */
    public function setCodeCollegePrud($codeCollegePrud) {
        $this->codeCollegePrud = $codeCollegePrud;
        return $this;
    }
}
