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
 * Code lib b plaf trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeLibBPlafTrait {

    /**
     * Code lib b plaf.
     *
     * @var string
     */
    private $codeLibBPlaf;

    /**
     * Get the code lib b plaf.
     *
     * @return string Returns the code lib b plaf.
     */
    public function getCodeLibBPlaf() {
        return $this->codeLibBPlaf;
    }

    /**
     * Set the code lib b plaf.
     *
     * @param string $codeLibBPlaf The code lib b plaf.
     */
    public function setCodeLibBPlaf($codeLibBPlaf) {
        $this->codeLibBPlaf = $codeLibBPlaf;
        return $this;
    }
}
