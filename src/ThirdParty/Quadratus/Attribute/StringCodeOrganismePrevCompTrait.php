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
 * Code organisme prev comp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeOrganismePrevCompTrait {

    /**
     * Code organisme prev comp.
     *
     * @var string
     */
    private $codeOrganismePrevComp;

    /**
     * Get the code organisme prev comp.
     *
     * @return string Returns the code organisme prev comp.
     */
    public function getCodeOrganismePrevComp() {
        return $this->codeOrganismePrevComp;
    }

    /**
     * Set the code organisme prev comp.
     *
     * @param string $codeOrganismePrevComp The code organisme prev comp.
     */
    public function setCodeOrganismePrevComp($codeOrganismePrevComp) {
        $this->codeOrganismePrevComp = $codeOrganismePrevComp;
        return $this;
    }
}
