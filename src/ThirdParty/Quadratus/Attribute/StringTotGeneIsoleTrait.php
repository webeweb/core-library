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
 * Tot gene isole trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTotGeneIsoleTrait {

    /**
     * Tot gene isole.
     *
     * @var string
     */
    private $totGeneIsole;

    /**
     * Get the tot gene isole.
     *
     * @return string Returns the tot gene isole.
     */
    public function getTotGeneIsole() {
        return $this->totGeneIsole;
    }

    /**
     * Set the tot gene isole.
     *
     * @param string $totGeneIsole The tot gene isole.
     */
    public function setTotGeneIsole($totGeneIsole) {
        $this->totGeneIsole = $totGeneIsole;
        return $this;
    }
}
