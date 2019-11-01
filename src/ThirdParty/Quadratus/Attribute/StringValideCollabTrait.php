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
 * Valide collab trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringValideCollabTrait {

    /**
     * Valide collab.
     *
     * @var string
     */
    private $valideCollab;

    /**
     * Get the valide collab.
     *
     * @return string Returns the valide collab.
     */
    public function getValideCollab() {
        return $this->valideCollab;
    }

    /**
     * Set the valide collab.
     *
     * @param string $valideCollab The valide collab.
     */
    public function setValideCollab($valideCollab) {
        $this->valideCollab = $valideCollab;
        return $this;
    }
}
