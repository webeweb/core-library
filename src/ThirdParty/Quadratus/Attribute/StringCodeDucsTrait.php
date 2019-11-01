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
 * Code ducs trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeDucsTrait {

    /**
     * Code ducs.
     *
     * @var string
     */
    private $codeDucs;

    /**
     * Get the code ducs.
     *
     * @return string Returns the code ducs.
     */
    public function getCodeDucs() {
        return $this->codeDucs;
    }

    /**
     * Set the code ducs.
     *
     * @param string $codeDucs The code ducs.
     */
    public function setCodeDucs($codeDucs) {
        $this->codeDucs = $codeDucs;
        return $this;
    }
}
