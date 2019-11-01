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
 * Articles lst perso acces gestion modifiables trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolArticlesLstPersoAccesGestionModifiablesTrait {

    /**
     * Articles lst perso acces gestion modifiables.
     *
     * @var bool
     */
    private $articlesLstPersoAccesGestionModifiables;

    /**
     * Get the articles lst perso acces gestion modifiables.
     *
     * @return bool Returns the articles lst perso acces gestion modifiables.
     */
    public function getArticlesLstPersoAccesGestionModifiables() {
        return $this->articlesLstPersoAccesGestionModifiables;
    }

    /**
     * Set the articles lst perso acces gestion modifiables.
     *
     * @param bool $articlesLstPersoAccesGestionModifiables The articles lst perso acces gestion modifiables.
     */
    public function setArticlesLstPersoAccesGestionModifiables($articlesLstPersoAccesGestionModifiables) {
        $this->articlesLstPersoAccesGestionModifiables = $articlesLstPersoAccesGestionModifiables;
        return $this;
    }
}
