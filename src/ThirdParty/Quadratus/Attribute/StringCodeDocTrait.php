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
 * Code doc trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeDocTrait {

    /**
     * Code doc.
     *
     * @var string
     */
    private $codeDoc;

    /**
     * Get the code doc.
     *
     * @return string Returns the code doc.
     */
    public function getCodeDoc() {
        return $this->codeDoc;
    }

    /**
     * Set the code doc.
     *
     * @param string $codeDoc The code doc.
     */
    public function setCodeDoc($codeDoc) {
        $this->codeDoc = $codeDoc;
        return $this;
    }
}
