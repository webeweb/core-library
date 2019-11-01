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
 * Tva decaissements trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTvaDecaissementsTrait {

    /**
     * Tva decaissements.
     *
     * @var bool
     */
    private $tvaDecaissements;

    /**
     * Get the tva decaissements.
     *
     * @return bool Returns the tva decaissements.
     */
    public function getTvaDecaissements() {
        return $this->tvaDecaissements;
    }

    /**
     * Set the tva decaissements.
     *
     * @param bool $tvaDecaissements The tva decaissements.
     */
    public function setTvaDecaissements($tvaDecaissements) {
        $this->tvaDecaissements = $tvaDecaissements;
        return $this;
    }
}
