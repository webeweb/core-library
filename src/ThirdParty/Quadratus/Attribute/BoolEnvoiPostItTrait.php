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
 * Envoi post it trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolEnvoiPostItTrait {

    /**
     * Envoi post it.
     *
     * @var bool
     */
    private $envoiPostIt;

    /**
     * Get the envoi post it.
     *
     * @return bool Returns the envoi post it.
     */
    public function getEnvoiPostIt() {
        return $this->envoiPostIt;
    }

    /**
     * Set the envoi post it.
     *
     * @param bool $envoiPostIt The envoi post it.
     */
    public function setEnvoiPostIt($envoiPostIt) {
        $this->envoiPostIt = $envoiPostIt;
        return $this;
    }
}
