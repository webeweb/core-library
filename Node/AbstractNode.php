<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Node;

use WBW\Library\Core\Algorithm\Sorting\AlphabeticalTreeSortInterface;

/**
 * Abstract node.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Node
 * @abstract
 */
abstract class AbstractNode implements AlphabeticalTreeSortInterface {

    /**
     * Index.
     *
     * @var array
     */
    private $index;

    /**
     * Id.
     *
     * @var string
     */
    private $id;

    /**
     * Children nodes.
     *
     * @var AbstractNode[]
     */
    private $nodes;

    /**
     * Parent node.
     *
     * @var AbstractNode
     */
    private $parent;

    /**
     * Constructor.
     *
     * @param string $id The id.
     */
    protected function __construct($id) {
        $this->id    = $id;
        $this->index = [];
        $this->nodes = [];
    }

    /**
     * Add a children node.
     *
     * @param AbstractNode $node The children node.
     * @return AbstractNode Returns the node.
     */
    final public function addNode(AbstractNode $node) {
        $node->parent           = $this;
        $this->index[$node->id] = count($this->nodes);
        $this->nodes[]          = $node;
        return $this;
    }

    /**
     * Clear the nodes.
     *
     * @return AbstractNode Returns the node.
     */
    final public function clearNodes() {
        foreach ($this->nodes as $node) {
            $this->removeNode($node);
        }
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getAlphabeticalTreeSortLabel() {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    final public function getAlphabeticalTreeSortParent() {
        return $this->parent;
    }

    /**
     * Get the last children node.
     *
     * @return AbstractNode Returns the first node in case of success, null otherwise.
     */
    final public function getFirstNode() {
        return $this->getNodeAt(0);
    }

    /**
     * Get the last children node.
     *
     * @return AbstractNode Returns the last node in case of success, null otherwise.
     */
    final public function getLastNode() {
        return $this->getNodeAt(count($this->nodes) - 1);
    }

    /**
     * Get the id.
     *
     * @return string Returns the id.
     */
    final public function getId() {
        return $this->id;
    }

    /**
     * Get a node at position.
     *
     * @param integer $position The position.
     * @return AbstractNode Returns the node in case of success, null otherwise.
     */
    final public function getNodeAt($position) {
        if (0 <= $position && $position <= count($this->nodes) - 1) {
            return $this->nodes[$position];
        }
        return null;
    }

    /**
     * Get a node by id.
     *
     * @param string $id The id.
     * @param boolean $recursively Recursively ?
     * @return AbstractNode Returns a node in case of success, null otherwise.
     */
    final public function getNodeById($id, $recursively = false) {
        $found = null;
        if (true === array_key_exists($id, $this->index)) {
            $found = $this->getNodeAt($this->index[$id]);
        }
        if (null === $found && true === $recursively) {
            foreach ($this->nodes as $current) {
                $found = $current->getNodeById($id, $recursively);
                if (null !== $found) {
                    break;
                }
            }
        }
        return $found;
    }

    /**
     * Get the nodes.
     *
     * @return AbstractNode[] Returns the nodes.
     */
    final public function getNodes() {
        return $this->nodes;
    }

    /**
     * Get the parent.
     *
     * @return AbstractNode Returns the parent.
     */
    final public function getParent() {
        return $this->parent;
    }

    /**
     * Remove a node.
     *
     * @param AbstractNode $node The children node.
     * @return AbstractNode Returns the node.
     */
    final public function removeNode(AbstractNode $node) {
        if (true === array_key_exists($node->id, $this->index)) {
            unset($this->nodes[$this->index[$node->id]]);
            unset($this->index[$node->id]);
            $node->parent = null;
        }
        return $this;
    }

    /**
     * Size.
     *
     * @return integer Returns the sie.
     */
    final public function size() {
        return count($this->nodes);
    }

}
