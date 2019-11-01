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
 * Code revision trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeRevisionTrait {

    /**
     * Code revision.
     *
     * @var string
     */
    private $codeRevision;

    /**
     * Get the code revision.
     *
     * @return string Returns the code revision.
     */
    public function getCodeRevision() {
        return $this->codeRevision;
    }

    /**
     * Set the code revision.
     *
     * @param string $codeRevision The code revision.
     */
    public function setCodeRevision($codeRevision) {
        $this->codeRevision = $codeRevision;
        return $this;
    }
}
