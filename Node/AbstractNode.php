<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Node;

/**
 * Abstract node.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\Core\Node
 * @abstract
 */
abstract class AbstractNode {

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
		$this->id	 = $id;
		$this->index = [];
		$this->nodes = [];
	}

	/**
	 * Add a children node.
	 *
	 * @param AbstractNode $node The children node.
	 * @return AbstractNode Returns the node.
	 */
	public final function addNode(AbstractNode $node) {
		$node->parent			 = $this;
		$this->index[$node->id]	 = count($this->nodes);
		$this->nodes[]			 = $node;
		return $this;
	}

	/**
	 * Clear the nodes.
	 *
	 * @return AbstractNode Returns the node.
	 */
	public final function clearNodes() {
		foreach ($this->nodes as $node) {
			$this->removeNode($node);
		}
		return $this;
	}

	/**
	 * Get the last children node.
	 *
	 * @return AbstractNode Returns the first node in case of success, null otherwise.
	 */
	public final function getFirstNode() {
		return $this->getNodeAt(0);
	}

	/**
	 * Get the last children node.
	 *
	 * @return AbstractNode Returns the last node in case of success, null otherwise.
	 */
	public final function getLastNode() {
		return $this->getNodeAt(count($this->nodes) - 1);
	}

	/**
	 * Get the id.
	 *
	 * @return string Returns the id.
	 */
	public final function getId() {
		return $this->id;
	}

	/**
	 * Get a node at position.
	 *
	 * @param integer $position The position.
	 * @return AbstractNode Returns the node in case of success, null otherwise.
	 */
	public final function getNodeAt($position) {
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
	public final function getNodeById($id, $recursively = false) {
		$found = null;
		if (array_key_exists($id, $this->index)) {
			$found = $this->getNodeAt($this->index[$id]);
		}
		if (is_null($found) && $recursively) {
			foreach ($this->nodes as $current) {
				$found = $current->getNodeById($id, $recursively);
				if (!is_null($found)) {
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
	public final function getNodes() {
		return $this->nodes;
	}

	/**
	 * Get the parent.
	 *
	 * @return AbstractNode Returns the parent.
	 */
	public final function getParent() {
		return $this->parent;
	}

	/**
	 * Remove a node.
	 *
	 * @param AbstractNode $node The children node.
	 * @return AbstractNode Returns the node.
	 */
	public final function removeNode(AbstractNode $node) {
		if (array_key_exists($node->id, $this->index)) {
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
	public final function size() {
		return count($this->nodes);
	}

}
