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
 * Etab decl dadsu trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolEtabDeclDadsuTrait {

    /**
     * Etab decl dadsu.
     *
     * @var bool
     */
    private $etabDeclDadsu;

    /**
     * Get the etab decl dadsu.
     *
     * @return bool Returns the etab decl dadsu.
     */
    public function getEtabDeclDadsu() {
        return $this->etabDeclDadsu;
    }

    /**
     * Set the etab decl dadsu.
     *
     * @param bool $etabDeclDadsu The etab decl dadsu.
     */
    public function setEtabDeclDadsu($etabDeclDadsu) {
        $this->etabDeclDadsu = $etabDeclDadsu;
        return $this;
    }
}
