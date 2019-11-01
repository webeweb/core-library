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
 * Id carte appel rec trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringIdCarteAppelRecTrait {

    /**
     * Id carte appel rec.
     *
     * @var string
     */
    private $idCarteAppelRec;

    /**
     * Get the id carte appel rec.
     *
     * @return string Returns the id carte appel rec.
     */
    public function getIdCarteAppelRec() {
        return $this->idCarteAppelRec;
    }

    /**
     * Set the id carte appel rec.
     *
     * @param string $idCarteAppelRec The id carte appel rec.
     */
    public function setIdCarteAppelRec($idCarteAppelRec) {
        $this->idCarteAppelRec = $idCarteAppelRec;
        return $this;
    }
}
