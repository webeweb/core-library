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
 * Code responsable trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeResponsableTrait {

    /**
     * Code responsable.
     *
     * @var string
     */
    private $codeResponsable;

    /**
     * Get the code responsable.
     *
     * @return string Returns the code responsable.
     */
    public function getCodeResponsable() {
        return $this->codeResponsable;
    }

    /**
     * Set the code responsable.
     *
     * @param string $codeResponsable The code responsable.
     */
    public function setCodeResponsable($codeResponsable) {
        $this->codeResponsable = $codeResponsable;
        return $this;
    }
}
