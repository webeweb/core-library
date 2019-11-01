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
 * Code col modification trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeColModificationTrait {

    /**
     * Code col modification.
     *
     * @var string
     */
    private $codeColModification;

    /**
     * Get the code col modification.
     *
     * @return string Returns the code col modification.
     */
    public function getCodeColModification() {
        return $this->codeColModification;
    }

    /**
     * Set the code col modification.
     *
     * @param string $codeColModification The code col modification.
     */
    public function setCodeColModification($codeColModification) {
        $this->codeColModification = $codeColModification;
        return $this;
    }
}
