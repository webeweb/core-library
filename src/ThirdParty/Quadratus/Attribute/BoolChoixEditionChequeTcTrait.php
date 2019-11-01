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
 * Choix edition cheque tc trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolChoixEditionChequeTcTrait {

    /**
     * Choix edition cheque tc.
     *
     * @var bool
     */
    private $choixEditionChequeTc;

    /**
     * Get the choix edition cheque tc.
     *
     * @return bool Returns the choix edition cheque tc.
     */
    public function getChoixEditionChequeTc() {
        return $this->choixEditionChequeTc;
    }

    /**
     * Set the choix edition cheque tc.
     *
     * @param bool $choixEditionChequeTc The choix edition cheque tc.
     */
    public function setChoixEditionChequeTc($choixEditionChequeTc) {
        $this->choixEditionChequeTc = $choixEditionChequeTc;
        return $this;
    }
}
