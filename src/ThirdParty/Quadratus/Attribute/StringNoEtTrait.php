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
 * No et trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNoEtTrait {

    /**
     * No et.
     *
     * @var string
     */
    private $noEt;

    /**
     * Get the no et.
     *
     * @return string Returns the no et.
     */
    public function getNoEt() {
        return $this->noEt;
    }

    /**
     * Set the no et.
     *
     * @param string $noEt The no et.
     */
    public function setNoEt($noEt) {
        $this->noEt = $noEt;
        return $this;
    }
}
