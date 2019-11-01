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
 * Code presentation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodePresentationTrait {

    /**
     * Code presentation.
     *
     * @var string
     */
    private $codePresentation;

    /**
     * Get the code presentation.
     *
     * @return string Returns the code presentation.
     */
    public function getCodePresentation() {
        return $this->codePresentation;
    }

    /**
     * Set the code presentation.
     *
     * @param string $codePresentation The code presentation.
     */
    public function setCodePresentation($codePresentation) {
        $this->codePresentation = $codePresentation;
        return $this;
    }
}
