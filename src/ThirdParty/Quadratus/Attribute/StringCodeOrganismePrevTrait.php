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
 * Code organisme prev trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeOrganismePrevTrait {

    /**
     * Code organisme prev.
     *
     * @var string
     */
    private $codeOrganismePrev;

    /**
     * Get the code organisme prev.
     *
     * @return string Returns the code organisme prev.
     */
    public function getCodeOrganismePrev() {
        return $this->codeOrganismePrev;
    }

    /**
     * Set the code organisme prev.
     *
     * @param string $codeOrganismePrev The code organisme prev.
     */
    public function setCodeOrganismePrev($codeOrganismePrev) {
        $this->codeOrganismePrev = $codeOrganismePrev;
        return $this;
    }
}
