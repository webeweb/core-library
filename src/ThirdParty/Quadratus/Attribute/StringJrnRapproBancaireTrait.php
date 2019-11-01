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
 * Jrn rappro bancaire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringJrnRapproBancaireTrait {

    /**
     * Jrn rappro bancaire.
     *
     * @var string
     */
    private $jrnRapproBancaire;

    /**
     * Get the jrn rappro bancaire.
     *
     * @return string Returns the jrn rappro bancaire.
     */
    public function getJrnRapproBancaire() {
        return $this->jrnRapproBancaire;
    }

    /**
     * Set the jrn rappro bancaire.
     *
     * @param string $jrnRapproBancaire The jrn rappro bancaire.
     */
    public function setJrnRapproBancaire($jrnRapproBancaire) {
        $this->jrnRapproBancaire = $jrnRapproBancaire;
        return $this;
    }
}
