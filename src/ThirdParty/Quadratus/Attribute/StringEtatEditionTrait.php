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
 * Etat edition trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEtatEditionTrait {

    /**
     * Etat edition.
     *
     * @var string
     */
    private $etatEdition;

    /**
     * Get the etat edition.
     *
     * @return string Returns the etat edition.
     */
    public function getEtatEdition() {
        return $this->etatEdition;
    }

    /**
     * Set the etat edition.
     *
     * @param string $etatEdition The etat edition.
     */
    public function setEtatEdition($etatEdition) {
        $this->etatEdition = $etatEdition;
        return $this;
    }
}
