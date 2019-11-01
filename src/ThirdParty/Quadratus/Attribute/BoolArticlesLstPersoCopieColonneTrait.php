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
 * Articles lst perso copie colonne trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolArticlesLstPersoCopieColonneTrait {

    /**
     * Articles lst perso copie colonne.
     *
     * @var bool
     */
    private $articlesLstPersoCopieColonne;

    /**
     * Get the articles lst perso copie colonne.
     *
     * @return bool Returns the articles lst perso copie colonne.
     */
    public function getArticlesLstPersoCopieColonne() {
        return $this->articlesLstPersoCopieColonne;
    }

    /**
     * Set the articles lst perso copie colonne.
     *
     * @param bool $articlesLstPersoCopieColonne The articles lst perso copie colonne.
     */
    public function setArticlesLstPersoCopieColonne($articlesLstPersoCopieColonne) {
        $this->articlesLstPersoCopieColonne = $articlesLstPersoCopieColonne;
        return $this;
    }
}
