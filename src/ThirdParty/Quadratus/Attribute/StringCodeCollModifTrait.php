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
 * Code coll modif trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeCollModifTrait {

    /**
     * Code coll modif.
     *
     * @var string
     */
    private $codeCollModif;

    /**
     * Get the code coll modif.
     *
     * @return string Returns the code coll modif.
     */
    public function getCodeCollModif() {
        return $this->codeCollModif;
    }

    /**
     * Set the code coll modif.
     *
     * @param string $codeCollModif The code coll modif.
     */
    public function setCodeCollModif($codeCollModif) {
        $this->codeCollModif = $codeCollModif;
        return $this;
    }
}
