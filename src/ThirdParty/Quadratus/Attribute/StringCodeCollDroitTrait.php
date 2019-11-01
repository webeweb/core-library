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
 * Code coll droit trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeCollDroitTrait {

    /**
     * Code coll droit.
     *
     * @var string
     */
    private $codeCollDroit;

    /**
     * Get the code coll droit.
     *
     * @return string Returns the code coll droit.
     */
    public function getCodeCollDroit() {
        return $this->codeCollDroit;
    }

    /**
     * Set the code coll droit.
     *
     * @param string $codeCollDroit The code coll droit.
     */
    public function setCodeCollDroit($codeCollDroit) {
        $this->codeCollDroit = $codeCollDroit;
        return $this;
    }
}
