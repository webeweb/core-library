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
 * No bl trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNoBlTrait {

    /**
     * No bl.
     *
     * @var string
     */
    private $noBl;

    /**
     * Get the no bl.
     *
     * @return string Returns the no bl.
     */
    public function getNoBl() {
        return $this->noBl;
    }

    /**
     * Set the no bl.
     *
     * @param string $noBl The no bl.
     */
    public function setNoBl($noBl) {
        $this->noBl = $noBl;
        return $this;
    }
}
