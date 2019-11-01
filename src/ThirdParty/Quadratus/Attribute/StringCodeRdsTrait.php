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
 * Code rds trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeRdsTrait {

    /**
     * Code rds.
     *
     * @var string
     */
    private $codeRds;

    /**
     * Get the code rds.
     *
     * @return string Returns the code rds.
     */
    public function getCodeRds() {
        return $this->codeRds;
    }

    /**
     * Set the code rds.
     *
     * @param string $codeRds The code rds.
     */
    public function setCodeRds($codeRds) {
        $this->codeRds = $codeRds;
        return $this;
    }
}
