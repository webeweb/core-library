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
 * Assurance controle trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAssuranceControleTrait {

    /**
     * Assurance controle.
     *
     * @var bool
     */
    private $assuranceControle;

    /**
     * Get the assurance controle.
     *
     * @return bool Returns the assurance controle.
     */
    public function getAssuranceControle() {
        return $this->assuranceControle;
    }

    /**
     * Set the assurance controle.
     *
     * @param bool $assuranceControle The assurance controle.
     */
    public function setAssuranceControle($assuranceControle) {
        $this->assuranceControle = $assuranceControle;
        return $this;
    }
}
