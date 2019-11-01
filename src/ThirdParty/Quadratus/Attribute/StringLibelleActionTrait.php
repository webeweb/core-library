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
 * Libelle action trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibelleActionTrait {

    /**
     * Libelle action.
     *
     * @var string
     */
    private $libelleAction;

    /**
     * Get the libelle action.
     *
     * @return string Returns the libelle action.
     */
    public function getLibelleAction() {
        return $this->libelleAction;
    }

    /**
     * Set the libelle action.
     *
     * @param string $libelleAction The libelle action.
     */
    public function setLibelleAction($libelleAction) {
        $this->libelleAction = $libelleAction;
        return $this;
    }
}
