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
 * Code collab trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeCollabTrait {

    /**
     * Code collab.
     *
     * @var string
     */
    private $codeCollab;

    /**
     * Get the code collab.
     *
     * @return string Returns the code collab.
     */
    public function getCodeCollab() {
        return $this->codeCollab;
    }

    /**
     * Set the code collab.
     *
     * @param string $codeCollab The code collab.
     */
    public function setCodeCollab($codeCollab) {
        $this->codeCollab = $codeCollab;
        return $this;
    }
}
