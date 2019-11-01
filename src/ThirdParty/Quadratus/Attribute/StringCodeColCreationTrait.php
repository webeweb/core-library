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
 * Code col creation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeColCreationTrait {

    /**
     * Code col creation.
     *
     * @var string
     */
    private $codeColCreation;

    /**
     * Get the code col creation.
     *
     * @return string Returns the code col creation.
     */
    public function getCodeColCreation() {
        return $this->codeColCreation;
    }

    /**
     * Set the code col creation.
     *
     * @param string $codeColCreation The code col creation.
     */
    public function setCodeColCreation($codeColCreation) {
        $this->codeColCreation = $codeColCreation;
        return $this;
    }
}
