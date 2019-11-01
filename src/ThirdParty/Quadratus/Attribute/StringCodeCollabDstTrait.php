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
 * Code collab dst trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeCollabDstTrait {

    /**
     * Code collab dst.
     *
     * @var string
     */
    private $codeCollabDst;

    /**
     * Get the code collab dst.
     *
     * @return string Returns the code collab dst.
     */
    public function getCodeCollabDst() {
        return $this->codeCollabDst;
    }

    /**
     * Set the code collab dst.
     *
     * @param string $codeCollabDst The code collab dst.
     */
    public function setCodeCollabDst($codeCollabDst) {
        $this->codeCollabDst = $codeCollabDst;
        return $this;
    }
}
