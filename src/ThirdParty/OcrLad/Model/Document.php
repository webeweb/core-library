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
use WBW\Library\Core\ThirdParty\OcrLad\Model\Attribute\ArrayWordsTrait;

/**
 * Document.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Core\ThirdParty\OcrLad\Model
 */
class Document {

    use ArrayWordsTrait;
    use StringFilenameTrait;

    /**
     * Index.
     *
     * @var Word[]
     */
    private $index;

    /**
     * Pages.
     *
     * @var Page[]
     */
    private $pages;

    /**
     * Constructor.
     */
    public function __construct() {
        $this->setIndex([]);
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
     * Get the index.
     *
     * @return Word[] Returns the index.
     */
    public function getIndex() {
        return $this->index;
    }

    /**
     * Get the number of pages.
     *
     * @return int Returns the number of pages.
     */
    public function getNumberPages() {
        return count($this->getPages());
    }

    /**
     * Get a page.
     *
     * @param int $p The page.
     * @return Page|null Returns the page in case of success, null otherwise.
     */
    public function getPage($p) {
        if (false === is_int($p) || $p < 0 || $this->getNumberPages() <= $p) {
            return null;
        }
        return $this->getPages()[$p];
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
     * Determines if this instance has pages.
     *
     * @return bool Returns true in case of success, false otherwise.
     */
    public function hasPages() {
        return 1 <= $this->getNumberPages();
    }

    /**
     * Index a word.
     *
     * @param Word $word The word.
     * @return Document Returns this document.
     */
    public function index(Word $word) {

        if (false === array_key_exists($word->getContent(), $this->index)) {
            $this->index[$word->getContent()] = [];
        }

        $this->index[$word->getContent()][] = $word;

        return $this;
    }

    /**
     * Set the index.
     *
     * @param Word[] $index The index.
     * @return Document Returns this document.
     */
    protected function setIndex($index) {
        $this->index = $index;
        return $this;
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
}