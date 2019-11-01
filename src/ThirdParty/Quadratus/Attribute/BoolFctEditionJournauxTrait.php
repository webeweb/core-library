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
 * Fct edition journaux trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolFctEditionJournauxTrait {

    /**
     * Fct edition journaux.
     *
     * @var bool
     */
    private $fctEditionJournaux;

    /**
     * Get the fct edition journaux.
     *
     * @return bool Returns the fct edition journaux.
     */
    public function getFctEditionJournaux() {
        return $this->fctEditionJournaux;
    }

    /**
     * Set the fct edition journaux.
     *
     * @param bool $fctEditionJournaux The fct edition journaux.
     */
    public function setFctEditionJournaux($fctEditionJournaux) {
        $this->fctEditionJournaux = $fctEditionJournaux;
        return $this;
    }
}
