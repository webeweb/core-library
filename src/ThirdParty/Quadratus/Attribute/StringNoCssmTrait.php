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
 * No cssm trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNoCssmTrait {

    /**
     * No cssm.
     *
     * @var string
     */
    private $noCssm;

    /**
     * Get the no cssm.
     *
     * @return string Returns the no cssm.
     */
    public function getNoCssm() {
        return $this->noCssm;
    }

    /**
     * Set the no cssm.
     *
     * @param string $noCssm The no cssm.
     */
    public function setNoCssm($noCssm) {
        $this->noCssm = $noCssm;
        return $this;
    }
}
