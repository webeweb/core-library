<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\OcrLad\Model;

use WBW\Library\Core\Model\Attribute\StringFilenameTrait;

/**
 * Document.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Core\ThirdParty\OcrLad\Model
 */
class Document {

    use StringFilenameTrait;

    /**
     * Pages.
     *
     * @var Page[]
     */
    private $pages;

    /**
     * Words.
     *
     * @var Word[]
     */
    private $words;

    /**
     * Constructor.
     */
    public function __construct() {
        $this->setPages([]);
        $this->setWords([]);
    }

    /**
     * Add a page.
     *
     * @param Page $page The page.
     * @return Document Returns this document.
     */
    public function addPage(Page $page) {
        $this->pages[] = $page;
        return $this;
    }

    /**
     * Add a word.
     *
     * @param Word $word The word.
     * @return Document Returns this document.
     */
    public function addWord(Word $word) {
        $this->words[] = $word;
        return $this;
    }

    /**
     * Get the pages.
     *
     * @return Page[] Returns the pages.
     */
    public function getPages() {
        return $this->pages;
    }

    /**
     * Get the words.
     *
     * @return Word[] Returns the words.
     */
    public function getWords() {
        return $this->words;
    }

    /**
     * Set the pages.
     *
     * @param Page[] $pages The pages.
     * @return Document Returns this document.
     */
    protected function setPages(array $pages) {
        $this->pages = $pages;
        return $this;
    }

    /**
     * Set the words.
     *
     * @param Word[] $words The words.
     * @return Document Returns this document.
     */
    protected function setWords(array $words) {
        $this->words = $words;
        return $this;
    }
}