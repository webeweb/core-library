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
 * Code dern sem gen trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeDernSemGenTrait {

    /**
     * Code dern sem gen.
     *
     * @var string
     */
    private $codeDernSemGen;

    /**
     * Get the code dern sem gen.
     *
     * @return string Returns the code dern sem gen.
     */
    public function getCodeDernSemGen() {
        return $this->codeDernSemGen;
    }

    /**
     * Set the code dern sem gen.
     *
     * @param string $codeDernSemGen The code dern sem gen.
     */
    public function setCodeDernSemGen($codeDernSemGen) {
        $this->codeDernSemGen = $codeDernSemGen;
        return $this;
    }
}
