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
 * Articles lst perso acces gestionnaire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolArticlesLstPersoAccesGestionnaireTrait {

    /**
     * Articles lst perso acces gestionnaire.
     *
     * @var bool
     */
    private $articlesLstPersoAccesGestionnaire;

    /**
     * Get the articles lst perso acces gestionnaire.
     *
     * @return bool Returns the articles lst perso acces gestionnaire.
     */
    public function getArticlesLstPersoAccesGestionnaire() {
        return $this->articlesLstPersoAccesGestionnaire;
    }

    /**
     * Set the articles lst perso acces gestionnaire.
     *
     * @param bool $articlesLstPersoAccesGestionnaire The articles lst perso acces gestionnaire.
     */
    public function setArticlesLstPersoAccesGestionnaire($articlesLstPersoAccesGestionnaire) {
        $this->articlesLstPersoAccesGestionnaire = $articlesLstPersoAccesGestionnaire;
        return $this;
    }
}
