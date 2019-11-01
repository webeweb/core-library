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
 * Op reponse inscrip trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolOpReponseInscripTrait {

    /**
     * Op reponse inscrip.
     *
     * @var bool
     */
    private $opReponseInscrip;

    /**
     * Get the op reponse inscrip.
     *
     * @return bool Returns the op reponse inscrip.
     */
    public function getOpReponseInscrip() {
        return $this->opReponseInscrip;
    }

    /**
     * Set the op reponse inscrip.
     *
     * @param bool $opReponseInscrip The op reponse inscrip.
     */
    public function setOpReponseInscrip($opReponseInscrip) {
        $this->opReponseInscrip = $opReponseInscrip;
        return $this;
    }
}
