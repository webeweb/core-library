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
 * Edition cheque tc trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolEditionChequeTcTrait {

    /**
     * Edition cheque tc.
     *
     * @var bool
     */
    private $editionChequeTc;

    /**
     * Get the edition cheque tc.
     *
     * @return bool Returns the edition cheque tc.
     */
    public function getEditionChequeTc() {
        return $this->editionChequeTc;
    }

    /**
     * Set the edition cheque tc.
     *
     * @param bool $editionChequeTc The edition cheque tc.
     */
    public function setEditionChequeTc($editionChequeTc) {
        $this->editionChequeTc = $editionChequeTc;
        return $this;
    }
}
